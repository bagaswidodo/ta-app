<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Selamat Datang Di KPTA</h1>

        <p class="lead">Silahkan daftarkan Proposal TA</p>

        <p><a class="btn btn-lg btn-success" href="<?= \yii\helpers\Url::to(['mahasiswa/create']); ?>">Daftar Proposal</a></p>
    </div>
</div>
