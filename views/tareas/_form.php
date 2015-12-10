<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tareas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tareas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idTipoTarea')->textInput() ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FInicio')->textInput() ?>

    <?= $form->field($model, 'FFin')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
