<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Bimbingan */

$this->title = 'Buat Bimbingan';
$this->params['breadcrumbs'][] = ['label' => 'Bimbingans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bimbingan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
