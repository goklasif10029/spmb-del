<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PmbSyaratUsmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Syarat Usm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pmb-syarat-usm-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pmb Syarat Usm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_syarat_usm',
            'nama_syarat:ntext',
            [
                'attribute'=>'id_usm',
                'label'=>'USM',
                'value'=>function($model){
                    return $model->idUsm->usm;
                }
            ],
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
