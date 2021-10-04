<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kontak */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kontak-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-lg-4">
    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4">
    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-4">
    <?= $form->field($model, 'instansi')->textInput(['maxlength' => true]) ?>
    </div>
</div>
    <?= $form->field($model, 'isi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Kirim', ['class' => 'btn  btn-lg btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
