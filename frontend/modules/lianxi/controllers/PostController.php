<?php
namespace app\modules\lianxi\controllers;

use yii\web\Controller;
use app\modules\lianxi\models\Post;
use yii\filters\HttpCache;
use yii\behaviors\TimestampBehavior;
use yii\base\Object;

class PostController extends Controller
{
    
 /* (non-PHPdoc)
  * @see \yii\base\Component::behaviors()
  */
 public function behaviors() {
  // TODO: Auto-generated method stub
     return [
         'class' => TimestampBehavior::className(),
//          [
//          'class' => HttpCache::className(),
//          'only' => ['index'],
//          'lastModified' => function ($action, $params) {
//              $q = new \yii\db\Query();
// //              echo 'ssssssssssssssssssss'.'<br>'.'ssssssssssssssssssss'.'<br>';
//              return $q->from('{{%post}}')->max('updated_at');
//          },
//          ],
//          [
//          'class' => 'yii\filters\HttpCache',
//          'only' => ['index'],
//          'etagSeed' => function ($action, $params) {
//              $post = $this->findModel(\Yii::$app->request->get('id'));
//              return serialize([$post->name, $post->content]);
//          },
//          ],
     ];
 }
 

 public function beforeAction($action)
 {
     if (!parent::beforeAction($action)) {
         return false;
     }
 
     $controller = \Yii::$app->controller->id;
     $action = \Yii::$app->controller->action->id;
     $permissionName = 'lianxi/'.$controller.'/'.$action;
     if(!\Yii::$app->user->can($permissionName) && \Yii::$app->getErrorHandler()->exception === null){
         throw new \yii\web\UnauthorizedHttpException('对不起，您现在还没获此操作的权限');
     }
     return true;
 }
 
 public function actionIndex()
 {
     $model = new Post();
     $articles = $model->selectPost();
     return $this->render('index', ['articles' => $articles]);
     
 }
 
 public function actionCreatePost()
 {
     $model = new Post();
     if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
//          $this->created_at = time();
//          $this->updated_at = time();
         $model->save();
         return $this->render('index', ['articles' => [$model]]);
     }else {
         return $this->render('create-post', ['model' => $model, 'param' => null]);
     }
 }
 
 public function actionEditPost($id = null)
 {
     $model = new Post();
     $data = $model->selectOnePost($id);
//      print_r($data);
     if(!\Yii::$app->user->can('updateOwnPost', ['post' => $data]) && \Yii::$app->getErrorHandler()->exception === null){
         throw new \yii\web\UnauthorizedHttpException('对不起，');
     }
     if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
         $model->update();
         return $this->render('index', ['articles' => [$data]]);
     }else {
         return $this->render('create-post', ['model' => $data, 'param' => 'edit']);
     }
//      $this->render($view);
     
 }

}

?>