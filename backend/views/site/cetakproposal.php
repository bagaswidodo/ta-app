<?php

use yii\grid\GridView;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Proposal Skripsi Mahasiswa';
?>

            <h1>Daftar Proposal Terdaftar</h1>
                <?= 

                GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nim',
            'nama_mahasiswa',
            'judul',
            'nama_dosen',
            // 'nama_progdi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
                ?>
