<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Conductor $model */

$this->title = $model->id_conductor;
$this->params['breadcrumbs'][] = ['label' => 'Conductors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="conductor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_conductor' => $model->id_conductor], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_conductor' => $model->id_conductor], [
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
            'id_conductor',
            'nombre',
            'apellido_paterno',
            'apellido_materno',
            'numero_licencia',
            'telefono',
            'estado',
        ],
    ]) ?>

</div>
