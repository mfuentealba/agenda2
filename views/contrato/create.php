<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblContrato */

$this->title = 'Create Tbl Contrato';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Contratos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-contrato-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
