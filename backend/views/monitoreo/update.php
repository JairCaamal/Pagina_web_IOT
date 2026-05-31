<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\MonitoreoConductor $model */

$this->title = 'Update Monitoreo Conductor: ' . $model->id_monitoreo;
$this->params['breadcrumbs'][] = ['label' => 'Monitoreo Conductors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_monitoreo, 'url' => ['view', 'id_monitoreo' => $model->id_monitoreo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="monitoreo-conductor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
