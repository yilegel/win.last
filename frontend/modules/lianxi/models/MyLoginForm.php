<?php
namespace app\modules\lianxi\models;

use yii\base\Model;
use app\modules\lianxi\models\MyUser;

class MyLoginForm extends Model
{
    public $username;
    public $password;
    private  $_user;
    
 /* (non-PHPdoc)
  * @see \yii\base\Model::rules()
  */
 public function rules() {
  // TODO: Auto-generated method stub
    return [
        [['username','password'],'required'],
        ['password','validatePassword'],
    ];
 }
 
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, '登录名或密码错误');
            }
        }
    }
 
 public function login()
 {
     if ($this->validate()) {
//          echo '登录成功'.'<br>'.'登录成功'.'<br>'.'登录成功'.'<br>'.'登录成功'.'<br>'.'登录成功'.'<br>';
//          print_r($this->getUser());
         return \Yii::$app->user->login($this->getUser(),3600);

     }else {
//          return false;
        echo 'myloginform错误';
     }
 }
 
 public function getUser()
 {
     if ($this->_user === null) {
         $this->_user = MyUser::findByUsername($this->username);
     }
     return $this->_user;
 }

}

?>