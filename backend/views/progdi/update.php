<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Progdi */

$this->title = 'Ubah Progdi Progdi: ' . ' ' . $model->nama_progdi;
$this->params['breadcrumbs'][] = ['label' => 'Progdis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_progdi, 'url' => ['view', 'id' => $model->kd_progdi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="progdi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
