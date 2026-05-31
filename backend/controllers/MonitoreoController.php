<?php

namespace backend\controllers;

use common\models\MonitoreoConductor;
use backend\models\search\MonitoreoConductorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MonitoreoController implements the CRUD actions for MonitoreoConductor model.
 */
class MonitoreoController extends Controller
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
     * Lists all MonitoreoConductor models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MonitoreoConductorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MonitoreoConductor model.
     * @param int $id_monitoreo Id Monitoreo
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_monitoreo)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_monitoreo),
        ]);
    }

    /**
     * Creates a new MonitoreoConductor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MonitoreoConductor();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_monitoreo' => $model->id_monitoreo]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MonitoreoConductor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_monitoreo Id Monitoreo
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_monitoreo)
    {
        $model = $this->findModel($id_monitoreo);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_monitoreo' => $model->id_monitoreo]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MonitoreoConductor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_monitoreo Id Monitoreo
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_monitoreo)
    {
        $this->findModel($id_monitoreo)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MonitoreoConductor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_monitoreo Id Monitoreo
     * @return MonitoreoConductor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_monitoreo)
    {
        if (($model = MonitoreoConductor::findOne(['id_monitoreo' => $id_monitoreo])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
