<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telpon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'progdi')->textInput() ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'foto')->textInput() ?>

    <?= $form->field($model, 'proposal')->textInput() ?>

    <?= $form->field($model, 'kst')->textInput() ?>

    <?= $form->field($model, 'transkrip')->textInput() ?>

    <?= $form->field($model, 'usulan_pembimbing_1')->textInput() ?>

    <?= $form->field($model, 'usulan_pembimbing_2')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
