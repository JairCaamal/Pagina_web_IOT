<?php

use common\models\Sensor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\search\SensorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sensores del Sistema';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="sensor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(
            'Registrar Sensor',
            ['create'],
            ['class' => 'btn btn-primary']
        ) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([

        'dataProvider' => $dataProvider,

        'filterModel' => $searchModel,

        'columns' => [

            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id_monitoreo',
                'label' => 'Monitoreo Relacionado'
            ],

            [
                'attribute' => 'tipo_sensor',

                'label' => 'Tipo de Sensor',

                'format' => 'raw',

                'value' => function($model){

                    if($model->tipo_sensor == 'MQ3'){

                        return '<span class="badge bg-danger">
                                    MQ3 - Alcohol
                                </span>';
                    }

                    if($model->tipo_sensor == 'MAX30102'){

                        return '<span class="badge bg-primary">
                                    MAX30102 - Ritmo Cardíaco
                                </span>';
                    }

                    if($model->tipo_sensor == 'Acelerómetro'){

                        return '<span class="badge bg-warning text-dark">
                                    Acelerómetro
                                </span>';
                    }

                    return '<span class="badge bg-success">
                                Cámara
                            </span>';
                }
            ],

            [
                'attribute' => 'valor_detectado',
                'label' => 'Valor Detectado'
            ],

            [
                'attribute' => 'unidad_medida',
                'label' => 'Unidad de Medida'
            ],

            [
                'attribute' => 'fecha_lectura',
                'label' => 'Fecha de Lectura'
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
                                    'confirm' => '¿Deseas eliminar este sensor?',
                                    'method' => 'post',
                                ],
                            ]
                        );
                    },

                ],

                'urlCreator' => function (
                    $action,
                    Sensor $model,
                    $key,
                    $index,
                    $column
                ) {

                    return Url::toRoute([
                        $action,
                        'id_sensor' => $model->id_sensor
                    ]);
                }
            ],
        ],
    ]); ?>

</div>