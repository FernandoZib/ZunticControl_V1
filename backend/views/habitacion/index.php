<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\HabitacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Habitacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="habitacion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Habitacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_tipo_habitacion',
            'id_planta',
            'id_estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
