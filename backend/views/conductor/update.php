<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Conductor $model */

$this->title = 'Actualizar Conductor: ' . $model->id_conductor;
$this->params['breadcrumbs'][] = ['label' => 'Conductors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_conductor, 'url' => ['view', 'id_conductor' => $model->id_conductor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="conductor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
