<?php 
    use yii\helpers\Html;
    use yii\helpers\Url;
// use frontend;
?>
<style>
.lianxi-default-index{
	background: #000;
}
</style>
<div class="lianxi-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <h5 style="color: red;">连接到</h5>
    <p><?= Html::a('首页',['/'],['class'=>'btn btn-lg btn-success'])?></p>
    <p><a href = "<?php echo Url::home()?>">haha</a></p>
    <p><a href = "<?php echo Url::toRoute('/frontend/site/index')?>">最前面的”/“决定了是否当前模块</a></p>
    <p><a class="btn btn-lg btn-success" href="<?php echo Url::toRoute(['lianxi/my-site/index'])?>">我的登录</a></p>     
</div>














