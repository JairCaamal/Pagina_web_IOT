<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Alerta $model */

$this->title = 'Create Alerta';
$this->params['breadcrumbs'][] = ['label' => 'Alertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alerta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
