<?php

namespace backend\controllers;

use common\models\Sensor;
use backend\models\search\SensorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SensorController implements the CRUD actions for Sensor model.
 */
class SensorController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Sensor models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SensorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sensor model.
     * @param int $id_sensor Id Sensor
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_sensor)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_sensor),
        ]);
    }

    /**
     * Creates a new Sensor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Sensor();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_sensor' => $model->id_sensor]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Sensor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_sensor Id Sensor
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_sensor)
    {
        $model = $this->findModel($id_sensor);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_sensor' => $model->id_sensor]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Sensor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_sensor Id Sensor
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_sensor)
    {
        $this->findModel($id_sensor)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sensor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_sensor Id Sensor
     * @return Sensor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_sensor)
    {
        if (($model = Sensor::findOne(['id_sensor' => $id_sensor])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
