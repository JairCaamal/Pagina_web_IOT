<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Sensor $model */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="sensor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo_sensor')
        ->dropDownList([

            'MQ3' => 'MQ3',
            'MAX30102' => 'MAX30102',
            'Acelerómetro' => 'Acelerómetro',
            'Cámara' => 'Cámara',

        ],
        ['prompt' => 'Selecciona un sensor']) ?>

    <?= $form->field($model, 'valor_detectado')
        ->textInput([
            'type' => 'number',
            'step' => '0.01',
            'placeholder' => 'Valor detectado'
        ]) ?>

    <?= $form->field($model, 'unidad_medida')
        ->textInput([
            'maxlength' => true,
            'placeholder' => 'Ejemplo: BPM, %, m/s²'
        ]) ?>

    <?= $form->field($model, 'fecha_lectura')
        ->input('datetime-local') ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar Sensor', [
            'class' => 'btn btn-primary'
        ]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>