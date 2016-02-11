<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Dosen */

$this->title = 'Tambahkan Dosen Baru';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Dosen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dosen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
