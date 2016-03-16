<?php
namespace app\modules\lianxi\controllers;

use yii\web\Controller;
use app\modules\lianxi\models\MyLoginForm;
use app\modules\lianxi\models\MySignupForm;
use Yii;

class MySiteController extends Controller
{
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionLogin()
    {
        $model = new MyLoginForm();
        
        if ($model->load(\Yii::$app->request->post()) && $model->login()){
            return $this->goBack(['lianxi/my-site/index']);
//             echo '完成登录';
        }else {
            return $this->render('login',['model'=>$model]);
        }
    }
    
    public function actionSignup()
    {
        $model = new MySignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goBack(['lianxi/my-site/index']);
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

}
?>