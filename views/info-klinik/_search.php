<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\InfoKlinikSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="info-klinik-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pegawai') ?>

    <?= $form->field($model, 'wilayah') ?>

    <?= $form->field($model, 'user') ?>

    <?= $form->field($model, 'pegawai') ?>

    <?= $form->field($model, 'tindakan') ?>

    <?php // echo $form->field($model, 'obat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
