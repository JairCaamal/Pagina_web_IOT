<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\MonitoreoConductor $model */

$this->title = $model->id_monitoreo;
$this->params['breadcrumbs'][] = ['label' => 'Monitoreo Conductors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="monitoreo-conductor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_monitoreo' => $model->id_monitoreo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_monitoreo' => $model->id_monitoreo], [
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
            'id_monitoreo',
            'id_conductor',
            'nivel_riesgo',
            'estado_alerta',
            'pulso_cardiaco',
            'nivel_alcohol',
            'fatiga_detectada',
            'fecha_registro',
        ],
    ]) ?>

</div>
