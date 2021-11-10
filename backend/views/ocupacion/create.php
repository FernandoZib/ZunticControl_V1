<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ocupacion */

$this->title = 'Create Ocupacion';
$this->params['breadcrumbs'][] = ['label' => 'Ocupaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ocupacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
