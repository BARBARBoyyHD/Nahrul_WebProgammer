<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\InfoTagihan $model */

$this->title = 'Create Info Tagihan';
$this->params['breadcrumbs'][] = ['label' => 'Info Tagihans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-tagihan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


</div>
