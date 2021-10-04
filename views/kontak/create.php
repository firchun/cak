<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kontak */

$this->title = 'Create Kontak';
$this->params['breadcrumbs'][] = ['label' => 'Kontaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kontak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
