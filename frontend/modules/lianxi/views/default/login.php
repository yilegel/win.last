<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    // 增加一个提示标签
    <?= $form->field($model, 'username')->textInput()->hint('Please enter your name')->label('Name') ?>
    // 创建一个 HTML5 邮箱输入框
    <?= $form->field($model, 'email')->input('email') ?>
    <?php // 允许多个文件被上传：
    echo $form->field($model, 'uploadFile[]')->fileInput(['multiple'=>'multiple']);
    
    // 允许进行选择多个项目：
    echo $form->field($model, 'items[]')->checkboxList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C']);
    /* echo $form->field($model, 'product_category')->dropdownList(
    ProductCategory::find()->select(['category_name', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Select Category']
); */?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>