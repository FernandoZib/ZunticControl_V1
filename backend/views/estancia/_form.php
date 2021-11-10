<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Estancia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estancia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha_entrada')->textInput() ?>

    <?= $form->field($model, 'fecha_salida')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
