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

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <td>No</td>
            <td>Hari</td>
            <td>Jam Bimbingan</td>
            <td>Action</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Senin</td>
            <td>12.00-15.00</td>
            <td>
                <button class="btn btn-success">Edit</button>
            </td>
        </tr>
    </table>

</div>
