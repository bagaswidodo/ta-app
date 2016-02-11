<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Konsentrasi */

$this->title = 'Tambahkan Konsentrasi Baru';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Konsentrasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konsentrasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
