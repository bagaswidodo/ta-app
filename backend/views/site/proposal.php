<?php

use yii\grid\GridView;
/* @var $this yii\web\View */

$this->title = 'Proposal Skripsi Mahasiswa';
?>
<div class="site-index">

    <div class="body-content">


        <div class="row">
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


            <hr>
            <!-- <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>No</td>
                    <td>Nim</td>
                    <td>Progdi - Konsentrasi</td>
                    <td>Pembimbing</td>
                    <td>Aksi</td>
                </tr>
                <tr>
                    <td>No</td>
                    <td>Nim</td>
                    <td>Progdi - Konsentrasi</td>
                    <td>Pembimbing</td>
                    <td>Aksi</td>
                </tr>
            </table> -->
        </div>

    </div>
</div>
