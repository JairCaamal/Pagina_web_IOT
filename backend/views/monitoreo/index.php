<?php

use common\models\MonitoreoConductor;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\search\MonitoreoConductorSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Monitoreo Inteligente';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="monitoreo-conductor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(
            'Registrar Monitoreo',
            ['create'],
            ['class' => 'btn btn-success']
        ) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([

        'dataProvider' => $dataProvider,

        'filterModel' => $searchModel,

        'columns' => [

            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id_conductor',
                'label' => 'Conductor Asociado',
            ],

            [
                'attribute' => 'nivel_riesgo',

                'label' => 'Nivel de Riesgo',

                'format' => 'raw',

                'value' => function($model){

                    if($model->nivel_riesgo == 'Crítico'){

                        return '<span class="badge bg-danger">
                                    Riesgo Crítico
                                </span>';
                    }

                    if($model->nivel_riesgo == 'Alto'){

                        return '<span class="badge bg-warning text-dark">
                                    Riesgo Alto
                                </span>';
                    }

                    if($model->nivel_riesgo == 'Medio'){

                        return '<span class="badge bg-primary">
                                    Riesgo Medio
                                </span>';
                    }

                    return '<span class="badge bg-success">
                                Riesgo Bajo
                            </span>';
                }
            ],

            [
                'attribute' => 'estado_alerta',
                'label' => 'Estado de la Alerta'
            ],

            [
                'attribute' => 'pulso_cardiaco',
                'label' => 'Pulso Cardíaco'
            ],

            [
                'attribute' => 'nivel_alcohol',
                'label' => 'Nivel de Alcohol'
            ],

            [
                'attribute' => 'fatiga_detectada',

                'label' => 'Fatiga Detectada',

                'value' => function($model){

                    return $model->fatiga_detectada
                        ? 'Sí Detectada'
                        : 'No Detectada';
                }
            ],

            [
                'attribute' => 'fecha_registro',
                'label' => 'Fecha de Registro'
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
                                    'confirm' => '¿Deseas eliminar este monitoreo?',
                                    'method' => 'post',
                                ],
                            ]
                        );
                    },

                ],

                'urlCreator' => function (
                    $action,
                    MonitoreoConductor $model,
                    $key,
                    $index,
                    $column
                ) {

                    return Url::toRoute([
                        $action,
                        'id_monitoreo' => $model->id_monitoreo
                    ]);
                }
            ],
        ],
    ]); ?>

</div>