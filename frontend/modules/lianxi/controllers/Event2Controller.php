<?php

namespace app\modules\lianxi\controllers;

class email {
    
    
}
class Event2Controller extends \yii\web\Controller
{
    public function init(){
        echo 'ssssssssssssssssssss'.'<br>'.'ssssssssssssssssssss'.'<br>';
    }
    
    const SEND_EMAIL = 'sendemail';
    
    public function actionIndex()
    {

//         $this->on(self::SEND_EMAIL, function (){echo 'hello';});
//         print_r($this->_events);
        
        
//         return $this->render('index');
    }
    
    public function notice($event) {
        $event->data['tittle'];
        return '通知各位，有新文章';
    }
    
    public function sendEmail(){
        return 'email发送成功';
    }
}
