<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblRubro */

$this->title = 'Create Tbl Rubro';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Rubros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-rubro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
