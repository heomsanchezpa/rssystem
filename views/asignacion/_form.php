<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Asignacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asignacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idTarea')->textInput() ?>

    <?= $form->field($model, 'idDocente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
