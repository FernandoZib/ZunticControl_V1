<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\HuespedSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="huesped-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'telefono') ?>

    <?= $form->field($model, 'correo') ?>

    <?= $form->field($model, 'id_cuenta') ?>

    <?php // echo $form->field($model, 'id_habitacion') ?>

    <?php // echo $form->field($model, 'id_estancia') ?>

    <?php // echo $form->field($model, 'creado_el') ?>

    <?php // echo $form->field($model, 'actualizado_el') ?>

    <?php // echo $form->field($model, 'creado_por') ?>

    <?php // echo $form->field($model, 'actualizado_por') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
