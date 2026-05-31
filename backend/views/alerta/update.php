<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Alerta $model */

$this->title = 'Update Alerta: ' . $model->id_alerta;
$this->params['breadcrumbs'][] = ['label' => 'Alertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_alerta, 'url' => ['view', 'id_alerta' => $model->id_alerta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alerta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
