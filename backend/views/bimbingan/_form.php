<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Mahasiswa;
use backend\models\Dosen;

/* @var $this yii\web\View */
/* @var $model backend\models\Bimbingan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bimbingan-form">

    <?php $form = ActiveForm::begin(); ?>

     <?=
        $form->field($model,'nim')->dropDownList(
            ArrayHelper::map(Mahasiswa::find()->all(),'nim','nim'))
     ?>
     <?=
        $form->field($model,'kd_dosen')->dropDownList(
            ArrayHelper::map(Dosen::find()->all(),'kd_dosen','nama'))
     ?>
     <?=
        $form->field($model,'dosen_dua')->dropDownList(
            ArrayHelper::map(Dosen::find()->all(),'kd_dosen','nama'))
     ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
