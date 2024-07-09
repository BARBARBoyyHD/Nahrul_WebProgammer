<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\InfoKlinik $model */

$this->title = 'Create Info Klinik';
$this->params['breadcrumbs'][] = ['label' => 'Info Kliniks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-klinik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
