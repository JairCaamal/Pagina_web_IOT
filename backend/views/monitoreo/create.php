<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\MonitoreoConductor $model */

$this->title = 'Create Monitoreo Conductor';
$this->params['breadcrumbs'][] = ['label' => 'Monitoreo Conductors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monitoreo-conductor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
