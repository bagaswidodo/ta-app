<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MahasiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'no_telpon') ?>

    <?= $form->field($model, 'progdi') ?>

    <?= $form->field($model, 'konsentrasi') ?>

    <?php // echo $form->field($model, 'judul') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'deskripsi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
