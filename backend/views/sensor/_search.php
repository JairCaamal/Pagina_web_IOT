<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\search\SensorSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sensor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_sensor') ?>

    <?= $form->field($model, 'id_monitoreo') ?>

    <?= $form->field($model, 'tipo_sensor') ?>

    <?= $form->field($model, 'valor_detectado') ?>

    <?= $form->field($model, 'unidad_medida') ?>

    <?php // echo $form->field($model, 'fecha_lectura') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
