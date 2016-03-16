<?php
namespace app\modules\lianxi\controllers;


use yii\web\Controller;
use Yii;
use yii\base\ErrorException;
use yii\web\NotFoundHttpException;
use yii\base\Object;
use app\modules\lianxi\models\EntryForm;
use app\modules\lianxi\models\LoginForm;
use yii\helpers\Url;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        /*1、请求的header信息  */
        /* $headers = Yii::$app->request->headers;
        print_r($headers); */
        
        /*2、 response的格式 */
        /* \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'message' => 'hello world',
            'code' => 100,
        ]; */
        
        /*3、 data为返回的主体信息 */
        /* $response = \Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_JSON;
        $response->data = ['message' => 'hello world']; */
        
        /* 4、 将session储存在MySQL中（框架的好处 ：如此简单） */        
        /* $session = Yii::$app->session;
//         $session['yiyi.name'] = 'yiyi';
//         $session['yii.email'] = 'yiyi@163.com';
        echo isset($session['yiyi.name']) ? $session['yiyi.name'].$session['yii.email']:'用户不存在';
 */      
        
        /* 5、设置，访问，添加cookies */
/* //         $cookies = Yii::$app->response->cookies;
//         $cookies->add(new \yii\web\Cookie([
//             'name' => 'language',
//             'value' => 'zh-CN',
//         ]));
        $cook = Yii::$app->request->cookies;
        print_r($cook); */
        
        /* 手动抛出异常，随意设置 */
        /* try {
            echo $xx;
        } catch (ErrorException $e) {
//             echo "cuowu";
            throw new NotFoundHttpException();//可以掩盖上面的东西，为什么？？
        } */
        
//         echo date('Y/m/d H:i:s' , time());
        
//         return $this->render('index');

        echo Url::toRoute(['@web']);
    }
    
    public function actionCeshi()
    {
        
        
        $a=["Animal" => "horse", "Type" => "mammal"];
        function (){echo "haha";};
//         echo $a['Animal'];
        return $this->render('index');
    }
    
    /**
    * @Route("app/modules/lianxi/controllers/say-hello", name="say-hello")
    * @Template()
    */
    public function actionSayHello($message='hello')
    {    
        $i = $message;
        echo $i;
        return $this->render('sayHello'/* ,['message'=>$message] */);
    }
    
    public function actionEntry() {
        $model = new EntryForm();
        
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            //validate data or other thing;
            return $this->render('entry-confirm',['model'=>$model]);
        }else {
            //init view or errors;
            return $this->render('entry',['model'=>$model]);
        }
    }
    
    public function actionLogin()
    {
        $model = new LoginForm();
        
        return $this->render('login',['model'=>$model]);
    }
    
    public function actionSignup()
    {
        //         if (\Yii::$app->user->isGuest) {
        //             echo 'haha';
        //         }
        //         $ip = \Yii::$app->getRequest()->getUserIP();
        //         echo $ip;
    
        ;
        if ($this->IsGuest) {
            echo 'haha';
        }else {
            echo 'gun';
        }
    }
    
    
    /*
     * 无结果的实验 ，草，为什么 */  /* 终于有结果了 */
    public function getIsGuest()
    {
        //         echo 'getisguest';
        //         return $this->getIdentity() === null;
    
        /*
         *
         *  草你丫的，原来这里是一个判断语句，搞毛线啊
         *
         *  此处就是为了判断，identity是否为空（因为它是个对象）*/
        //         return false===false;
        //         return true===true;
        //         return null===null;
    
        //         return null===false;
        return null===true;
        //         return null===null;
    }
    public $_identity = null;
    public function getIdentity()
    {
        echo 'getidentity';
        return $this->_identity;//return 根本没毛变化啊
        //echo $this->_identity;//此处是唯一受 上面的null控制的，方式
    }
}
