<?php

namespace backend\controllers;

use Yii;
use common\models\MonitoreoConductor;
use backend\models\search\MonitoreoConductorSearch;
use backend\models\search\AlertaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use common\models\Conductor;
use common\models\Sensor;
use common\models\Alerta;

use common\models\PermisosHelpers;

use common\models\User;
use backend\models\Rol;

/**
 * MonitoreoController implementa las acciones CRUD
 * para el monitoreo inteligente de conductores.
 */
class MonitoreoController extends Controller
{
    /**
     * Control de acceso y permisos RBAC
     */
    public function behaviors()
    {
        $id_user = Yii::$app->user->identity->getId();
        $nombreRol = User::findOne(['id' => $id_user])->rol->rol_nombre;

        switch ($nombreRol) {

            // OPERADOR DE MONITOREO
            case 'Capturista':

                return [

                    'access' => [
                        'class' => \yii\filters\AccessControl::className(),
                        'only' => ['index', 'view', 'create', 'update', 'delete'],
                        'rules' => [

                            [
                                'actions' => ['index', 'view', 'create', 'update', 'delete'],
                                'allow' => true,
                                'roles' => ['@'],
                                'matchCallback' => function ($rule, $action) {

                                    return PermisosHelpers::requerirMinimoRol(
                                        'Capturista',
                                        Yii::$app->user->identity->getId()
                                    )
                                    && PermisosHelpers::requerirEstado('Activo');

                                }
                            ],

                        ],

                    ],

                    'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                            'delete' => ['POST'],
                        ],
                    ],
                ];

            break;

            // SUPERVISOR
            case 'Docente':

                return [

                    'access' => [
                        'class' => \yii\filters\AccessControl::className(),
                        'only' => ['index', 'view', 'create', 'update', 'delete'],
                        'rules' => [

                            [
                                'actions' => ['index', 'view'],
                                'allow' => true,
                                'roles' => ['@'],
                                'matchCallback' => function ($rule, $action) {

                                    return PermisosHelpers::requerirMinimoRol(
                                        'Docente',
                                        Yii::$app->user->identity->getId()
                                    )
                                    && PermisosHelpers::requerirEstado('Activo');

                                }
                            ],

                        ],

                    ],

                    'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                            'delete' => ['POST'],
                        ],
                    ],
                ];

            break;

            // ENCARGADO DE SEGURIDAD
            case 'Coordinador':

                return [

                    'access' => [
                        'class' => \yii\filters\AccessControl::className(),
                        'only' => ['index', 'view', 'create', 'update', 'delete'],
                        'rules' => [

                            [
                                'actions' => ['index', 'view'],
                                'allow' => true,
                                'roles' => ['@'],
                                'matchCallback' => function ($rule, $action) {

                                    return PermisosHelpers::requerirMinimoRol(
                                        'Coordinador',
                                        Yii::$app->user->identity->getId()
                                    )
                                    && PermisosHelpers::requerirEstado('Activo');

                                }
                            ],

                        ],

                    ],

                    'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                            'delete' => ['POST'],
                        ],
                    ],
                ];

            break;

            // ADMINISTRADOR OPERATIVO
            case 'Jefe_Carrera':

                return [

                    'access' => [
                        'class' => \yii\filters\AccessControl::className(),
                        'only' => ['index', 'view', 'create', 'update', 'delete'],
                        'rules' => [

                            [
                                'actions' => ['index', 'view', 'create', 'update', 'delete'],
                                'allow' => true,
                                'roles' => ['@'],
                                'matchCallback' => function ($rule, $action) {

                                    return PermisosHelpers::requerirMinimoRol(
                                        'Jefe_Carrera',
                                        Yii::$app->user->identity->getId()
                                    )
                                    && PermisosHelpers::requerirEstado('Activo');

                                }
                            ],

                        ],

                    ],

                    'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                            'delete' => ['POST'],
                        ],
                    ],
                ];

            break;

            // ADMINISTRADOR DEL SISTEMA
            case 'Admin':

                return [

                    'access' => [
                        'class' => \yii\filters\AccessControl::className(),
                        'only' => ['index', 'view', 'create', 'update', 'delete'],
                        'rules' => [

                            [
                                'actions' => ['index', 'view', 'create', 'update', 'delete'],
                                'allow' => true,
                                'roles' => ['@'],
                                'matchCallback' => function ($rule, $action) {

                                    return PermisosHelpers::requerirMinimoRol(
                                        'Admin',
                                        Yii::$app->user->identity->getId()
                                    )
                                    && PermisosHelpers::requerirEstado('Activo');

                                }
                            ],

                        ],

                    ],

                    'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                            'delete' => ['POST'],
                        ],
                    ],
                ];

            break;

            // CONTROL TOTAL DEL SISTEMA
            case 'SuperUsuario':

                return [

                    'access' => [
                        'class' => \yii\filters\AccessControl::className(),
                        'only' => ['index', 'view', 'create', 'update', 'delete'],
                        'rules' => [

                            [
                                'actions' => ['index', 'view', 'create', 'update', 'delete'],
                                'allow' => true,
                                'roles' => ['@'],
                                'matchCallback' => function ($rule, $action) {

                                    return PermisosHelpers::requerirMinimoRol(
                                        'SuperUsuario',
                                        Yii::$app->user->identity->getId()
                                    )
                                    && PermisosHelpers::requerirEstado('Activo');

                                }
                            ],

                        ],

                    ],

                    'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                            'delete' => ['POST'],
                        ],
                    ],
                ];

            break;
        }
    }

    /**
     * Lista todos los monitoreos registrados
     */
    public function actionIndex()
    {
        $searchModel = new MonitoreoConductorSearch();

        $dataProvider = $searchModel->search(
            Yii::$app->request->queryParams
        );

        return $this->render('index', [

            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

        ]);
    }

    /**
     * Muestra un monitoreo específico
     */
    public function actionView($id)
    {
        $searchModel = new AlertaSearch();

        $dataProvider = $searchModel->search(
            Yii::$app->request->queryParams,
            $id
        );

        return $this->render('view', [

            'model' => $this->findModel($id),
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

        ]);
    }

    /**
     * Registrar un nuevo monitoreo
     */
    public function actionCreate()
    {
        $model = new MonitoreoConductor();

        if ($model->load(Yii::$app->request->post())
            && $model->save()) {

            return $this->redirect([
                'view',
                'id' => $model->id_monitoreo
            ]);

        } else {

            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Actualizar monitoreo existente
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())
            && $model->save()) {

            return $this->redirect([
                'view',
                'id' => $model->id_monitoreo
            ]);

        } else {

            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Eliminar monitoreo
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        $alertas = $model->alertas;
        $sensores = $model->sensores;
        $conductores = $model->conductores;

        $a = count($alertas);
        $s = count($sensores);
        $c = count($conductores);

        // Evitar eliminar monitoreos relacionados
        if ($a > 0 || $s > 0 || $c > 0) {

            return $this->redirect([

                'monitoreo/index',
                'errorBd' => true,
                'class' => 'Monitoreo'

            ]);

        } else {

            $this->findModel($id)->delete();

            return $this->redirect(['index']);
        }
    }

    /**
     * Buscar monitoreo por ID
     */
    protected function findModel($id)
    {
        if (($model = MonitoreoConductor::findOne($id)) !== null) {

            return $model;

        } else {

            throw new NotFoundHttpException(
                'El monitoreo solicitado no existe.'
            );
        }
    }

    /**
     * Cargar monitoreos dinámicamente
     */
    public function actionList($id)
    {
        $monitoreos = MonitoreoConductor::find()
            ->where(['id_conductor' => $id])
            ->all();

        $monitoreosSize = MonitoreoConductor::find()
            ->where(['id_conductor' => $id])
            ->count();

        if ($monitoreosSize > 0) {

            echo '<option selected disabled>
                    Selecciona un monitoreo
                  </option>';

            foreach ($monitoreos as $mon) {

                echo "<option value='"
                    . $mon->id_monitoreo .
                    "'>"
                    . $mon->nivel_riesgo .
                    " - "
                    . $mon->fecha_registro .
                    "</option>";
            }

        } else {

            echo "<option> ---- </option>";
        }
    }
}