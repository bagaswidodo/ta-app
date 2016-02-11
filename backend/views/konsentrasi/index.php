<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KonsentrasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Konsentrasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konsentrasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Konsentrasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kd_konsentrasi',
            'nama_konsentrasi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
