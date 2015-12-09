<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tipotarea */

$this->title = 'Create Tipotarea';
$this->params['breadcrumbs'][] = ['label' => 'Tipotareas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipotarea-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
