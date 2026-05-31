<?php

use common\models\Conductor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\search\ConductorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Gestión de Conductores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="conductor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Registrar Conductor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

    ['class' => 'yii\grid\SerialColumn'],

    [
        'attribute' => 'nombre',
        'label' => 'Nombre(s)'
    ],

    [
        'attribute' => 'apellido_paterno',
        'label' => 'Apellido Paterno'
    ],

    [
        'attribute' => 'apellido_materno',
        'label' => 'Apellido Materno'
    ],

    [
        'attribute' => 'numero_licencia',
        'label' => 'Número de Licencia'
    ],

    [
        'attribute' => 'telefono',
        'label' => 'Teléfono'
    ],

    [
        'attribute' => 'estado',
        'label' => 'Estado'
    ],

    [
        'class' => ActionColumn::className(),

        'template' => '{view} {update} {delete}',

        'buttons' => [

            'view' => function ($url) {

                return Html::a(
                    'Ver',
                    $url,
                    ['class' => 'btn btn-info btn-sm']
                );
            },

            'update' => function ($url) {

                return Html::a(
                    'Actualizar',
                    $url,
                    ['class' => 'btn btn-primary btn-sm']
                );
            },

            'delete' => function ($url) {

                return Html::a(
                    'Eliminar',
                    $url,
                    [
                        'class' => 'btn btn-danger btn-sm',
                        'data' => [
                            'confirm' => '¿Deseas eliminar este conductor?',
                            'method' => 'post',
                        ],
                    ]
                );
            },

        ],

        'urlCreator' => function ($action, Conductor $model, $key, $index, $column) {

            return Url::toRoute([
                $action,
                'id_conductor' => $model->id_conductor
            ]);
        }
    ],
],
    ]); ?>


</div>
