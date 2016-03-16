<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<style>

</style>
<div class="haha">
    <div class="row">
    <div class="col-lg-7">
        <h1>所有文章</h1>
        <p>可以缓存到客户端的文章</p>
        <p><a class="btn btn-lg btn-success" href="<?php echo Url::toRoute(['create-post'])?>">添加文章</a></p>
        <?php foreach ($articles as $article){?>
            <ul>
                <li><label>标题</label><?php echo Html::encode($article->name)?></li>
                <li><label>作者</label><?php echo Html::encode($article->author)?></li>
                <li><label>概述</label><?php echo Html::encode($article->discription)?></li>
                <li><label>内容</label><p><?php echo Html::encode($article->content)?></p></li>
            </ul>
            <p><a class="btn btn-success" href="<?= Url::toRoute(['edit-post', 'id'=>$article->id])?>">修改</a></p>
            <p><br><hr></p>
        <?php }?>
    </div>
</div>
</div>