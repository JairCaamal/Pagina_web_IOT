<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Sensor $model */

$this->title = $model->id_sensor;
$this->params['breadcrumbs'][] = ['label' => 'Sensors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sensor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_sensor' => $model->id_sensor], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_sensor' => $model->id_sensor], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_sensor',
            'id_monitoreo',
            'tipo_sensor',
            'valor_detectado',
            'unidad_medida',
            'fecha_lectura',
        ],
    ]) ?>

</div>
