<?php
namespace app\modules\lianxi\models;

use yii\base\Model;

class LoginForm extends Model
{
    public $username;
    public $password;
    public $email;
    public $uploadFile;
    public $items;
    
    public function rules()
    {
        return [
            [['username','password'],'required'],
        ];
    }
}

?>