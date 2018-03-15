<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblUsers */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Users', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = $model->user;
?>
<div class="tbl-users-view">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->
    <h1><?= Html::encode($model->user) ?></h1>

    <p>
        <!--<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>-->

        <?= Html::a('Modificar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Contratar Servicio', ['servicio', 'id' => $model->id], ['class' => 'btn btn-danger']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'rut',
            'nombres',
            'ap_paterno',
            'ap_materno',
            'mail',
            'fecha_ingreso',
        ],
    ]) ?>

</div>
