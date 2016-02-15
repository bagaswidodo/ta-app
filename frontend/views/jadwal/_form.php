<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jadwal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_dosen')->hiddenInput(['value'=>Yii::$app->user->identity->kd_dosen])->label(false) ?>

    <?= $form->field($model, 'hari')->textInput() ?>

    <?= $form->field($model, 'jam_mulai')->textInput() ?>

    <?= $form->field($model, 'jam_selesai')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
