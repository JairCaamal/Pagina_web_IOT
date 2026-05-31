<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\search\AlertaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="alerta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_alerta') ?>

    <?= $form->field($model, 'id_monitoreo') ?>

    <?= $form->field($model, 'tipo_alerta') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'nivel_criticidad') ?>

    <?php // echo $form->field($model, 'fecha_alerta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
