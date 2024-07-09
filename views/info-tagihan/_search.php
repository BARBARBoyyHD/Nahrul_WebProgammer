<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\InfoTagihanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="info-tagihan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tagihan') ?>

    <?= $form->field($model, 'id_pasien') ?>

    <?= $form->field($model, 'id_obat') ?>

    <?= $form->field($model, 'harga') ?>

    <?= $form->field($model, 'total_obat') ?>

    <?php // echo $form->field($model, 'tagihan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
