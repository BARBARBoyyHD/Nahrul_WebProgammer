<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\InfoPasien $model */

$this->title = 'Update Info Pasien: ' . $model->id_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Info Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pasien, 'url' => ['view', 'id_pasien' => $model->id_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="info-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
