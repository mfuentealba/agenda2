<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblSuscripcion */

$this->title = 'Create Tbl Suscripcion';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Suscripcions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-suscripcion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
