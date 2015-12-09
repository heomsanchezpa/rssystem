<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AsignacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asignacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asignacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asignacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idAsignacion',
            'idTarea',
            'idDocente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
