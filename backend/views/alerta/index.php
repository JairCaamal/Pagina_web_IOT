<?php

use common\models\Alerta;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\search\AlertaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Alertas Críticas';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="alerta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(
            'Registrar Alerta',
            ['create'],
            ['class' => 'btn btn-danger']
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
                'attribute' => 'tipo_alerta',
                'label' => 'Tipo de Alerta'
            ],

            [
                'attribute' => 'descripcion',
                'label' => 'Descripción',
                'format' => 'ntext'
            ],

            [
                'attribute' => 'nivel_criticidad',

                'label' => 'Nivel de Criticidad',

                'format' => 'raw',

                'value' => function($model){

                    if($model->nivel_criticidad == 'Crítica'){

                        return '<span class="badge bg-danger">
                                    Crítica
                                </span>';
                    }

                    if($model->nivel_criticidad == 'Alta'){

                        return '<span class="badge bg-warning text-dark">
                                    Alta
                                </span>';
                    }

                    if($model->nivel_criticidad == 'Media'){

                        return '<span class="badge bg-primary">
                                    Media
                                </span>';
                    }

                    return '<span class="badge bg-success">
                                Baja
                            </span>';
                }
            ],

            [
                'attribute' => 'fecha_alerta',
                'label' => 'Fecha de la Alerta'
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
                                    'confirm' => '¿Deseas eliminar esta alerta?',
                                    'method' => 'post',
                                ],
                            ]
                        );
                    },

                ],

                'urlCreator' => function (
                    $action,
                    Alerta $model,
                    $key,
                    $index,
                    $column
                ) {

                    return Url::toRoute([
                        $action,
                        'id_alerta' => $model->id_alerta
                    ]);
                }
            ],
        ],
    ]); ?>

</div>