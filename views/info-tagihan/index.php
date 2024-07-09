<?php

use app\models\InfoTagihan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\InfoTagihanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Info Tagihans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-tagihan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Info Tagihan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tagihan',
            'id_pasien',
            'id_obat',
            'harga',
            'total_obat',
            'tagihan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, InfoTagihan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_tagihan' => $model->id_tagihan]);
                 }
            ],
        ],
    ]); ?>


</div>
