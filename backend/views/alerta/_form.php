<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Alerta $model */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="alerta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo_alerta')
        ->dropDownList([

            'Somnolencia' => 'Somnolencia',
            'Alcohol Detectado' => 'Alcohol Detectado',
            'Accidente' => 'Accidente',
            'Fatiga' => 'Fatiga',

        ],
        ['prompt' => 'Selecciona un tipo de alerta']) ?>

    <?= $form->field($model, 'descripcion')
        ->textarea([
            'rows' => 4,
            'placeholder' => 'Describe la situación detectada'
        ]) ?>

    <?= $form->field($model, 'nivel_criticidad')
        ->dropDownList([

            'Baja' => 'Baja',
            'Media' => 'Media',
            'Alta' => 'Alta',
            'Crítica' => 'Crítica',

        ],
        ['prompt' => 'Selecciona criticidad']) ?>

    <?= $form->field($model, 'fecha_alerta')
        ->input('datetime-local') ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar Alerta', [
            'class' => 'btn btn-danger'
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>