<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = "登录实验";
?>

<div class="my-site-login">
    <h1><?php echo Html::encode($this->title)?></h1>
    <p>登录界面</p>
    <div class="row">
        <div class="col-lg-4">
            <?php $form = ActiveForm::begin(['id'=>'login-form']);?>
            
                <?= $form->field($model,'username')->textInput(['autofocus'=>true])?>
                <?= $form->field($model,'password')->passwordInput()?>
                <p><?= Html::submitButton('登录',['class'=>'btn btn-primary','name'=>'login-button'])?></p>
            
            <?php ActiveForm::end();?>
        </div>
    </div>
</div>