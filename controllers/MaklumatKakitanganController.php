<?php

namespace app\controllers;

use Yii;
use app\models\MaklumatKakitangan;
use app\models\MaklumatKakitanganSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\ForbiddenHttpException;

/**
 * MaklumatKakitanganController implements the CRUD actions for MaklumatKakitangan model.
 */
class MaklumatKakitanganController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all MaklumatKakitangan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MaklumatKakitanganSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MaklumatKakitangan model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if (Yii::$app->user->can( 'view-maklumat' )) {
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
        else
        {
            throw new ForbiddenHttpException;
        }
        
    }

    /**
     * Creates a new MaklumatKakitangan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if ( Yii::$app->user->can( 'create-maklumat' ) ) {
            $model = new MaklumatKakitangan();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id_staf]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }
        else{
            throw new ForbiddenHttpException;
        }
        
    }

    /**
     * Updates an existing MaklumatKakitangan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if (Yii::$app->user->can('update-maklumat')) {
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id_staf]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
        else
        {
            throw new ForbiddenHttpException;
        }
        
    }

    /**
     * Deletes an existing MaklumatKakitangan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        if (Yii::$app->user->can('delete-staff')) {
            $this->findModel($id)->delete();

            return $this->redirect(['index']);
        }
        else
        {
            return new ForbiddenHttpException;
        }
        
    }

    /**
     * Finds the MaklumatKakitangan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MaklumatKakitangan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MaklumatKakitangan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
