<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Conductor;

/** @var yii\web\View $this */
/** @var common\models\MonitoreoConductor $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="monitoreo-conductor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_conductor')
    ->dropDownList(

        ArrayHelper::map(
            Conductor::find()->all(),
            'id_conductor',
            'nombre'
        ),

        ['prompt' => 'Selecciona un conductor']

    ) ?>

    <?= $form->field($model, 'nivel_riesgo')
    ->dropDownList([

        'Bajo' => 'Bajo',
        'Medio' => 'Medio',
        'Alto' => 'Alto',
        'Crítico' => 'Crítico',

    ],
    ['prompt' => 'Selecciona un nivel de riesgo']) ?>
    
    <?= $form->field($model, 'estado_alerta')
    ->dropDownList([

        'Activo' => 'Activo',
        'Atendido' => 'Atendido',
        'Pendiente' => 'Pendiente',

    ],
    ['prompt' => 'Selecciona un estado']) ?>

    <?= $form->field($model, 'pulso_cardiaco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nivel_alcohol')
    ->textInput([
        'type' => 'number',
        'step' => '0.01',
        'placeholder' => 'Ejemplo: 0.25'
    ]) ?>

    <?= $form->field($model, 'fatiga_detectada')
    ->dropDownList([

        0 => 'No Detectada',
        1 => 'Detectada',

    ],
    ['prompt' => 'Selecciona una opción']) ?>

    <?= $form->field($model, 'fecha_registro')
    ->input('datetime-local') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
