<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\InfoObat $model */

$this->title = 'Create Info Obat';
$this->params['breadcrumbs'][] = ['label' => 'Info Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-obat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
