<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Conductor $model */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="conductor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')
        ->textInput([
            'maxlength' => true,
            'placeholder' => 'Ingresa el nombre del conductor'
        ]) ?>

    <?= $form->field($model, 'apellido_paterno')
        ->textInput([
            'maxlength' => true,
            'placeholder' => 'Ingresa el apellido paterno'
        ]) ?>

    <?= $form->field($model, 'apellido_materno')
        ->textInput([
            'maxlength' => true,
            'placeholder' => 'Ingresa el apellido materno'
        ]) ?>

    <?= $form->field($model, 'numero_licencia')
        ->textInput([
            'maxlength' => true,
            'placeholder' => 'Ejemplo: LIC-2026-001'
        ]) ?>

    <?= $form->field($model, 'telefono')
        ->textInput([
            'maxlength' => true,
            'placeholder' => 'Número telefónico'
        ]) ?>

    <?= $form->field($model, 'estado')
        ->dropDownList([

            'Activo' => 'Activo',
            'Inactivo' => 'Inactivo',

        ],
        ['prompt' => 'Selecciona un estado']) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar Información', [
            'class' => 'btn btn-success'
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>