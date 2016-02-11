<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DosenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Dosen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambahkan Dosen Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_dosen',
            'nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
