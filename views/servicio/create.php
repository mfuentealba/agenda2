<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblServicio */

$this->title = 'Create Tbl Servicio';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Servicios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-servicio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
