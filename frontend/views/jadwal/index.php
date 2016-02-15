<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\JadwalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jadwal Bimbingan ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-index">

    <h1><?= Html::encode($this->title) ?><small><?= Yii::$app->user->identity->nama ?></small></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jadwal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'kd_dosen',
            'hari',
            'jam_mulai',
            'jam_selesai',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
