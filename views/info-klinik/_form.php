<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\InfoKlinik $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="info-klinik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'wilayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pegawai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
