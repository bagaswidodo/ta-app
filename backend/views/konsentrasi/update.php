<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Konsentrasi */

$this->title = 'Update Konsentrasi: ' . ' ' . $model->kd_konsentrasi;
$this->params['breadcrumbs'][] = ['label' => 'Konsentrasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_konsentrasi, 'url' => ['view', 'id' => $model->kd_konsentrasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="konsentrasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
