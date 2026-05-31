<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Alerta $model */

$this->title = $model->id_alerta;
$this->params['breadcrumbs'][] = ['label' => 'Alertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="alerta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_alerta' => $model->id_alerta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_alerta' => $model->id_alerta], [
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
            'id_alerta',
            'id_monitoreo',
            'tipo_alerta',
            'descripcion:ntext',
            'nivel_criticidad',
            'fecha_alerta',
        ],
    ]) ?>

</div>
