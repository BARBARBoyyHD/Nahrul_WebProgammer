<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\InfoKlinik $model */

$this->title = 'Update Info Klinik: ' . $model->id_pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Info Kliniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pegawai, 'url' => ['view', 'id_pegawai' => $model->id_pegawai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="info-klinik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
