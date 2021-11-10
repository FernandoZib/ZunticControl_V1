<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ocupacion */

$this->title = 'Update Ocupacion: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ocupaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ocupacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
