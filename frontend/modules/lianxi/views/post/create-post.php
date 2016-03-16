<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = '添加文章';
?>
<h1><?= Html::encode($this->title)?></h1>
<p>你自己的文章</p>
<div class="post-create-post">
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin()?>
            
                <?= $form->field($model,'name')->textInput(['autofocus'=>true])?>
                <?= $form->field($model,'author')->textInput()?>
                <?= $form->field($model,'discription')->textInput()?>
                <?= $form->field($model,'content')->textarea(['rows'=>5])?>
                <?php if($param=='edit'){?>
                    <p><?= Html::submitButton('修改', ['class'=>"btn btn-success"])?></p>
                <?php }else{?>
                    <p><?= Html::submitButton('添加', ['class'=>"btn btn-success"])?></p>
                <?php }?>
                
            <?php ActiveForm::end()?>
        </div>
    </div>
</div>