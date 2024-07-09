<?php

use app\models\InfoKlinik;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\InfoKlinikSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Info Kliniks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-klinik-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Info Klinik', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pegawai',
            'wilayah',
            'user',
            'pegawai',
            'tindakan',
            //'obat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InfoKlinik $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pegawai' => $model->id_pegawai]);
                 }
            ],
        ],
    ]); ?>


</div>
