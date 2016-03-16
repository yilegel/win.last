<?php
namespace app\modules\lianxi\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\filters\HttpCache;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%post}}';
    }
    
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            
        ];
    }
    
 /* (non-PHPdoc)
  * @see \yii\base\Model::rules()
  */
 public function rules() {
  // TODO: Auto-generated method stub
        return [
            [['name','author','discription','content'],'required'],
        ];
 }

 public function selectPost()
 {
     
     $customers = Post::find()
//      ->where(['status' => Post::STATUS_ACTIVE])
     ->orderBy('id')
     ->all();

//      $customers = Post::findAll();
     return $customers;
 }
 public function selectOnePost($id)
 {
     $onePost = Post::findOne(['id' => $id]);
     return $onePost;
 }
    
}

?>