<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PmbFoto */

$this->title = 'Update Pmb Foto: ' . $model->id_foto;
$this->params['breadcrumbs'][] = ['label' => 'Pmb Fotos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_foto, 'url' => ['view', 'id' => $model->id_foto]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pmb-foto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
