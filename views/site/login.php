<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
?>
<div>
<a class="hiddenanchor" id="signin"></a>
<div class="login_wrapper">
<div class="animate form login_form">
<section class="login_content">

<?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>
 <h1>Login Admin</h1>
<div>      
<div>
<?= $form->field($model, 'username')->textInput(['maxlength' => 255,'class'=>'form-control'])->label(false); ?>
</div>
<div>
<?= $form->field($model, 'password')->passwordInput()->label(false);?>
</div>
<div>

        <div class="row">
            <div class="col-xs-8">
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?= Html::submitButton('Log in', ['class' => 'btn btn-default submit', 'name' => 'login-button']) ?>
            </div>
</div>
<?php ActiveForm::end(); ?>
<div class="clearfix"></div>
<div class="separator">

<br />
<div>
<h1><i class="fa fa-pagelines"></i> <?=Yii::$app->name?></h1>
<p>©<?= date('Y') ?> All Rights Reserved. <?=Yii::$app->name?>. Privacy and Terms</p>
</div>
</div>
</form>
</section>
</div>
