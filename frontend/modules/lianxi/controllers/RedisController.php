<?php
namespace app\modules\lianxi\controllers;

use yii\web\Controller;
use yii\base\Object;
use yii\caching\FileDependency;

class RedisController extends Controller
{
    public function actionIndex()
    {
//         \Yii::$app->redis->set('first:name','lala');
        $cache = \Yii::$app->cache;
//         $key = 'haha';
//         $data = $cache->get($key);
//         if (!$data === false) {
//             echo $data;
//         }else {
//             $cache->set($key, 'wowowo');
//         }

        /* 
         * 缓存时间 */
        /* $cache->set('time', 'just30', 30);
        sleep(35);
        if ($cache->get('time')) {
            echo 'have cache';
        }else {
            echo 'no cache';
        } */
        
        /* 
         * 缓存的依赖 */
        /* $dependents = new FileDependency(['fileName'=>'cac.txt']);
        $cache->set('dependents', 'this is cache dependent', 30, $dependents); */
        
        /* 
         * 查询缓存 */
        $db = \Yii::$app->db;
//         $db->beginCache();
            
//         $command = $db->createCommand('SELECT * FROM {{%myuser}}');
//         $posts = $command->queryAll();
//         print_r($posts);
            
//         $db->enCache();
//         return $this->render('index');

        $result = $db->cache(function ($db){
            return $db->createCommand('select * from {{%myuser}}')->queryAll();
        });
        print_r($result);
        
    }
    
    public function actionGetCache()
    {
        $cache = \Yii::$app->cache;
        $data = $cache->get('dependents');
        if (!$data) {
            echo '没有缓存鸟，已经';
        }else {
            echo $data;
        }
    }
    
 /* (non-PHPdoc)
  * @see \yii\base\Component::behaviors()
  */
 public function behaviors() {
  // TODO: Auto-generated method stub

 }

}

?>