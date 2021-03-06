<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SuscripcionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Suscripcions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-suscripcion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Suscripcion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'comision',
            'descripcion',
            'valor',
            // 'duracion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
