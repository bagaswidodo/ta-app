<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Progdi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="progdi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_progdi')->textInput() ?>

    <?= $form->field($model, 'nama_progdi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
