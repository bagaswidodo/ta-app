<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Progdi */

$this->title = 'Tambahkan Progdi Baru';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Progdi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="progdi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
