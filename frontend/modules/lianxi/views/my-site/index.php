<?php
use yii\helpers\Url;

?>

<div class="container">
    <div class="row">
        
        <p><a class="btn  btn-lg btn-success" href="<?php echo Url::toRoute(['my-site/signup'])?>">注册</a></p>
        <?php if (Yii::$app->user->isGuest) {?>
        
            <p><a class="btn  btn-lg btn-success" href="<?php echo Url::toRoute(['my-site/login'])?>">登录</a></p>
        
        <?php } else {?>
        
            <p><a class="btn  btn-lg btn-success" href="<?php echo Url::toRoute(['my-site/logout'])?>">
            <?php echo Yii::$app->user->identity->username?>
            </a></p>
        <?php }?>
    </div>
</div>