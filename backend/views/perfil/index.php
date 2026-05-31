<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perfiles';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="profile-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- BOTÓN COLLAPSE (Bootstrap 5) -->
    <button class="btn btn-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#searchBox">
        Search
    </button>

    <!-- CONTENIDO COLAPSABLE -->
    <div class="collapse" id="searchBox">
        <?= $this->render('_search', ['model' => $searchModel]) ?>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            ['class' => 'yii\grid\SerialColumn'],

            ['attribute'=>'perfilIdLink', 'format'=>'raw'],
            ['attribute'=>'userLink', 'format'=>'raw'],

            'nombre',
            'apellido',
            'fecha_nacimiento',
            'generoNombre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>