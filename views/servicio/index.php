<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblServicioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Servicios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-servicio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Servicio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'glosa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
