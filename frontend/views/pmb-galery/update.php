<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PmbGalery */

$this->title = 'Update Pmb Galery: ' . $model->id_foto;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Galeries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_foto, 'url' => ['view', 'id' => $model->id_foto]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-galery-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
