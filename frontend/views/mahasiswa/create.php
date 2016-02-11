<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Mahasiswa */

$this->title = 'Daftarkan Proposal';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Proposal', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
