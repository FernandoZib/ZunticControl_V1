<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Limpieza */

$this->title = 'Create Limpieza';
$this->params['breadcrumbs'][] = ['label' => 'Limpiezas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="limpieza-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
