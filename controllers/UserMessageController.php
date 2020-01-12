<?php

namespace app\controllers;

use Yii;
use app\models\UserMessage;
use Carbon\Carbon;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserMessageController implements the CRUD actions for UserMessage model.
 */
class UserMessageController extends BaseController
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
     * Lists all UserMessage models.
     * @return mixed
     */
    public function actionIndex()
    {
       
        $model =  new UserMessage();
        if ($model->load(Yii::$app->request->post()) ) {
            if($model->validate()){
                if($model != null){
                    $model=UserMessage::find()->where('user_id',Yii::$app->user->id)->one();
                    $model->user_id=Yii::$app->user->id;
                    $model->created_at=Carbon::now('Asia/Amman');
                }else{
                    $model->user_id=Yii::$app->user->id;
                    $model->updated_at=Carbon::now('Asia/Amman'); 
                }
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
           
            return $this->render('create', [
                'model' => $model,
            ]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);

    
    }

}
