<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Huesped */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="huesped-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput() ?>

    <?= $form->field($model, 'correo')->textInput() ?>

    <?= $form->field($model, 'id_cuenta')->textInput() ?>

    <?= $form->field($model, 'id_habitacion')->textInput() ?>

    <?= $form->field($model, 'id_estancia')->textInput() ?>

    <?= $form->field($model, 'creado_el')->textInput() ?>

    <?= $form->field($model, 'actualizado_el')->textInput() ?>

    <?= $form->field($model, 'creado_por')->textInput() ?>

    <?= $form->field($model, 'actualizado_por')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
