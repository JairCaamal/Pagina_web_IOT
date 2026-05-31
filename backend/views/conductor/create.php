<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Conductor $model */

$this->title = 'Create Conductor';
$this->params['breadcrumbs'][] = ['label' => 'Conductors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conductor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
