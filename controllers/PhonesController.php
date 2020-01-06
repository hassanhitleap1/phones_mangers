<?php

namespace app\controllers;

use Yii;
use app\models\Phones;
use app\models\PhonesSearch;
use app\models\UserAction;
use Carbon\Carbon;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PhonesController implements the CRUD actions for Phones model.
 */
class PhonesController extends BaseController
{
    
    /**
     * {@inheritdoc}
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
     * Lists all Phones models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PhonesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Phones model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Phones model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Phones();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Phones model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
  
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        
            $useraction=new UserAction;
            $useraction->user_id=Yii::$app->user->id;
            $useraction->note=isset($_POST['Phones']['note'])?$_POST['Phones']['note']:'';
            $useraction->status=isset($_POST['Phones']['status_central'])?$_POST['Phones']['status_central']:-1;
            $useraction->phone_id=$id;
            $useraction->central_id=(Yii::$app->user->identity->central_id !=null)?Yii::$app->user->identity->central_id:-1 ;
            $useraction->created_at=Carbon::now('Asia/Amman');
            $useraction->updated_at=Carbon::now('Asia/Amman');
            $useraction->save();
            

            return $this->redirect(['index', 
                    'page' => Yii::$app->request->getQueryParam('page', null),
                    'PhonesSearch[fullname]' => Yii::$app->request->getQueryParam('PhonesSearch[fullname]',null) ,
                    'PhonesSearch[title_job]' => Yii::$app->request->getQueryParam('PhonesSearch[title_job]',null),
                    'PhonesSearch[gender]' => Yii::$app->request->getQueryParam('PhonesSearch[gender]',null) ,
                    'PhonesSearch[governorate_id]' => Yii::$app->request->getQueryParam('PhonesSearch[governorate_id]',null) ,
                    'PhonesSearch[date_of_birth]' => Yii::$app->request->getQueryParam('PhonesSearch[date_of_birth]',null) ,
                    'sort'=> Yii::$app->request->getQueryParam('sort',null) ,
                ]);
        }

        return $this->renderAjax('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Phones model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Phones model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Phones the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Phones::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
