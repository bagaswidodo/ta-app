<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\JadwalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kd_dosen') ?>

    <?= $form->field($model, 'hari') ?>

    <?= $form->field($model, 'jam_mulai') ?>

    <?= $form->field($model, 'jam_selesai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
