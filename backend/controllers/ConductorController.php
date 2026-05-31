<?php

namespace backend\controllers;

use common\models\Conductor;
use backend\models\search\ConductorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ConductorController implements the CRUD actions for Conductor model.
 */
class ConductorController extends Controller
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
     * Lists all Conductor models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ConductorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Conductor model.
     * @param int $id_conductor Id Conductor
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_conductor)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_conductor),
        ]);
    }

    /**
     * Creates a new Conductor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Conductor();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_conductor' => $model->id_conductor]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Conductor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_conductor Id Conductor
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_conductor)
    {
        $model = $this->findModel($id_conductor);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_conductor' => $model->id_conductor]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Conductor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_conductor Id Conductor
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_conductor)
    {
        $this->findModel($id_conductor)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Conductor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_conductor Id Conductor
     * @return Conductor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_conductor)
    {
        if (($model = Conductor::findOne(['id_conductor' => $id_conductor])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
