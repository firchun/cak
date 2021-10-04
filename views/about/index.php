<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-index">
<div class="clearfix"></div>
    <div class="row">
    <div class="col ">
    <div class="x_panel">
    <div class="x_title">
    <h2><?= Html::encode($this->title) ?></h2>
    <ul class="nav navbar-right panel_toolbox">
    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
    </li>
    </ul>
    <div class="clearfix"></div>
    
    </div>
    <div class="x_content">
    <?= Html::a('Tambah', ['create'], ['class' => 'btn btn-default navbar-right']) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'isi:ntext',
            'update_date',

            //['class' => 'yii\grid\ActionColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Aksi',
                'template'=>'{leadView}{leadUpdate}{leadStatus}{leadDelete}',
                'buttons'=>[
                    'leadView' => function($url,$model){
                        $url = Url::to(['view','id'=>$model->id]);
                        return Html::a('<span class="fa fa-file-text"></span>',$url,['class'=> 'btn  btn-default']);
                    },
                    'leadUpdate' => function($url,$model){
                        $url = Url::to(['update','id'=>$model->id]);
                        return Html::a('<span class="fa fa-pencil"></san>',$url ,['class'=> 'btn btn-default']);
                    },
                    'leadDelete' =>function($url,$model){
                        $url = Url::to(['delete', 'id'=>$model->id]);
                        return Html::a('<span class="fa fa-trash"></span>',$url,[
                        'title'=>'delete',
                        'data-confirm'=>Yii::t('yii', 'data ini di hapus'),
                        'data-method'=>'post',
                        'class'=>'btn btn-default',
                        ]);
                    },
                ],
            ]
        ],
    ]); ?>
 </div>
</div>
</div>
</div>

</div>
