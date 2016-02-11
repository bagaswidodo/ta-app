<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jadwal Mengajar Dosen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Buat Jadwal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nim',
            'nama',
            'no_telpon',
            'progdi.nama',
            'konsentrasi',
            // 'judul',
            // 'status',
            // 'deskripsi:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
