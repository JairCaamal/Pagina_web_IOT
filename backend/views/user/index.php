<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- BOTÓN COLLAPSE (Bootstrap 5) -->
    <button class="btn btn-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#searchBox">
        Search
    </button>

    <!-- CONTENIDO COLAPSABLE -->
    <div class="collapse" id="searchBox">
        <?= $this->render('_search', ['model' => $searchModel]) ?>
    </div>

    <!-- GRID -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            ['class' => 'yii\grid\SerialColumn'],

            ['attribute'=>'userIdLink', 'format'=>'raw'],
            ['attribute'=>'userLink', 'format'=>'raw'],
            ['attribute'=>'perfilLink', 'format'=>'raw'],

            'email:email',
            'rolNombre',
            'tipoUsuarioNombre',
            'estadoNombre',
            'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>