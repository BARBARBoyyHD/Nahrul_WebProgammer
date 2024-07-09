<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\InfoTagihan $model */

$this->title = 'Update Info Tagihan: ' . $model->id_tagihan;
$this->params['breadcrumbs'][] = ['label' => 'Info Tagihans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tagihan, 'url' => ['view', 'id_tagihan' => $model->id_tagihan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="info-tagihan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
