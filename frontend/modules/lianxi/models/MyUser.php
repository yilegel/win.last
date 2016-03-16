<?php
namespace app\modules\lianxi\models;

use yii\web\IdentityInterface;
use yii\db\ActiveRecord;
use Yii;
use yii\behaviors\TimestampBehavior;

class MyUser extends ActiveRecord implements IdentityInterface
{
    const STATUS_ACTIVE = 10;

     public static function tableName() {
      // TODO: Auto-generated method stub
        return "{{%user}}";
     }
 
     public function behaviors()
     {
         return [
             TimestampBehavior::className(),
         ];
     }    

    public function validateAuthKey($authKey)
    {}

    public function getAuthKey()
    {}

    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {}
    
    
    /* 
     * 已经实现的方法 */
    public static function findByUsername($username)
    {
        return static::findOne(['username'=>$username]);
    }
    
    public function validatePassword($password)
    {
        return \Yii::$app->security->validatePassword($password, $this->password_hash);
    }
    
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }
    
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
}

?>