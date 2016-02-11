<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Progdi;
use backend\models\Konsentrasi;


/* @var $this yii\web\View */
/* @var $model common\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telpon')->textInput(['maxlength' => true]) ?>

    
     <?=
        $form->field($model,'progdi')->dropDownList(
            ArrayHelper::map(Progdi::find()->all(),'kd_progdi','nama_progdi'))

     ?>

    <!-- for future work hope fully auto select when progdi 67 kd_progdi 67xx and if 68 68xx -->
     <?=
        $form->field($model,'konsentrasi')->dropDownList(
            ArrayHelper::map(Konsentrasi::find()->all(),'kd_konsentrasi','nama_konsentrasi'))

     ?>


    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
