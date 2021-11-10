<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Estancia */

$this->title = 'Create Estancia';
$this->params['breadcrumbs'][] = ['label' => 'Estancias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estancia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
