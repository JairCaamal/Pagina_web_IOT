<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Sensor $model */

$this->title = 'Update Sensor: ' . $model->id_sensor;
$this->params['breadcrumbs'][] = ['label' => 'Sensors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sensor, 'url' => ['view', 'id_sensor' => $model->id_sensor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sensor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
