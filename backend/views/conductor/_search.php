<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\search\ConductorSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="conductor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_conductor') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'apellido_paterno') ?>

    <?= $form->field($model, 'apellido_materno') ?>

    <?= $form->field($model, 'numero_licencia') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
