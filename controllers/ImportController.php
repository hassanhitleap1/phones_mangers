<?php


namespace app\controllers;

use app\models\ImportForm;
use app\models\User;
use Yii;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;


class ImportController extends  BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['index', 'view','create', 'update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['index', 'view','create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->user->identity->type == User::USER_SUPER_ADMIN ||  Yii::$app->user->identity->type == User::USER_ADMIN;

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
    }


    /**
     * Lists all UserMessage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new ImportForm();

        if ($model->load(Yii::$app->request->post()) ) {
             $model->file = UploadedFile::getInstance($model, 'file');
                if ($model->file && $model->validate()) {
                    $fullPath='upload/'.$model->file->baseName . '.' . $model->file->extension;
                    $model->file->saveAs( $fullPath);
                    if ( $xlsx = \SimpleXLSX::parse($fullPath) ) {
                        echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';
                        foreach( $xlsx->rows() as $r ) {
                            echo '<tr><td>'.implode('</td><td>', $r ).'</td></tr>';
                        }
                        echo '</table>';
                        // or $xlsx->toHTML();
                    } else {
                        echo SimpleXLSX::parseError();
                    }
                    exit;
                    Yii::$app->session->setFlash('success', 'sucessfully upload ');
                }


            return $this->redirect(['index']);
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }
}