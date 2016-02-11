<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Mahasiswa Bimbingan ' ;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title). "<small> " . Yii::$app->user->identity->nama ."</small>" ?></h1>

    	    <?= 

            GridView::widget([
		        'dataProvider' => $dataProvider,
		        // 'filterModel' => $searchModel,
		        'columns' => [
		            ['class' => 'yii\grid\SerialColumn'],

		            'nim',
		            'nama',
		            'judul',
		          'nama_progdi',
		            'nama_konsentrasi',

		            // ['class' => 'yii\grid\ActionColumn'],
		        ],
		    ]);
                ?>
</div>
