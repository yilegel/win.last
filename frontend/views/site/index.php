<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>The Songs That My love</h1>
        <p class="lead">the love forever</p>
        <p><a class="btn btn-lg btn-success" herf="#">喜欢</a></p>
    </div>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>明目张胆</h2>
                <p>何韵诗</p>
                <h5>等，终于到夜深才敢收集你，上次留在饭店那纸巾</h5>
                <p><a class="btn  btn-default" herf="#">如果</a></p>
            </div>
            <div class="col-lg-4">
                <h2>明目张胆</h2>
                <p>何韵诗</p>
                <h5>等，终于到夜深才敢收集你，上次留在饭店那纸巾</h5>
                <p><a class="btn  btn-default" herf="#">如果</a></p>
            </div>
            <div class="col-lg-4">
                <h2>明目张胆</h2>
                <p>何韵诗</p>
                <h5>等，终于到夜深才敢收集你，上次留在饭店那纸巾</h5>
                <p><a class="btn  btn-default" herf="#">如果</a></p>
            </div>
            <p><?php echo Html::a("tiaozhuan",['/lianxi'],['class'=>'btn btn-success'])?></p>
            <p><a href = "<?php echo Url::home()?>">haha</a></p>
            <p><a class="btn btn-lg btn-success" href="<?php echo Url::toRoute(['lianxi/my-site/index'])?>">我的登录</a></p>
            <p><a class="btn btn-lg btn-success" href="<?php echo Url::toRoute(['lianxi/post/index'])?>">文章</a></p> 
        </div>
    </div>
</div>
