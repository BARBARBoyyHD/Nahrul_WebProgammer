<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\InfoObat $model */

$this->title = 'Update Info Obat: ' . $model->id_obat;
$this->params['breadcrumbs'][] = ['label' => 'Info Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_obat, 'url' => ['view', 'id_obat' => $model->id_obat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="info-obat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
