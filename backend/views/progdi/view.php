<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Progdi */

$this->title = $model->kd_progdi;
$this->params['breadcrumbs'][] = ['label' => 'Progdis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="progdi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->kd_progdi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->kd_progdi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kd_progdi',
            'nama_progdi',
        ],
    ]) ?>

</div>
