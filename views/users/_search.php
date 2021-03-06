<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblUsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'rut') ?>

    <?= $form->field($model, 'nombres') ?>

    <?= $form->field($model, 'ap_paterno') ?>

    <?= $form->field($model, 'ap_materno') ?>

    <?php // echo $form->field($model, 'mail') ?>

    <?php // echo $form->field($model, 'user') ?>

    <?php // echo $form->field($model, 'pass') ?>

    <?php // echo $form->field($model, 'fecha_ingreso') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
