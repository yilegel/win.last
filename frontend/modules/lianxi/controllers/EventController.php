<?php

namespace app\modules\lianxi\controllers;

use yii\base\Controller;

class EventController extends \yii\web\Controller
{
    const UPDATE = 'update';
    
    public $tittle = null;
    public $content = null;
    public $dress = "www.weikeyi.com";
    public $description = null;
    
  /*   public function __construct()
    {
        $this->tittle = $_POST['tittle'];
        $this->content = $_POST['content'];
        $this->description = substr($this->content, 0, 20);
        $this->makeEmail();
    } */
    function makeEmail() {
        $email = [];
        $email['tittle'] = $this->tittle;
        $email['dress'] = $this->dress;
        $email['description'] = $this->description;
        $email['content'] = $this->content;
        
        $this->trigger(self::UPDATE);
        return '发布成功';
    }
    
    public function storeDb()
    {
        \Yii::$app->db;
    }
    
    public function notice()
    {
        
    }
    
        
    /**
    * @Route("app/modules/lianxi/controllers/eventController", name="event")
    * @Template()
    */
    public function actionIndex()
    {   
        /* $xx = new \PDO('mysql:host=localhost;dbname=last', 'root', '');
        $xx = new \DateTime();
        print_r($xx->getTimezone()); */
        
        
//         $connection = \Yii::$app->db;
//         $command = $connection->createCommand('select * from {{%song}}');
//         $post = $command->queryAll();
//         print_r($post);
        
        new Event2Controller('e', 'li');
//         return $this->render('index');
    }
}
