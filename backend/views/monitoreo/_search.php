<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\search\MonitoreoConductorSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="monitoreo-conductor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_monitoreo') ?>

    <?= $form->field($model, 'id_conductor') ?>

    <?= $form->field($model, 'nivel_riesgo') ?>

    <?= $form->field($model, 'estado_alerta') ?>

    <?= $form->field($model, 'pulso_cardiaco') ?>

    <?php // echo $form->field($model, 'nivel_alcohol') ?>

    <?php // echo $form->field($model, 'fatiga_detectada') ?>

    <?php // echo $form->field($model, 'fecha_registro') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
