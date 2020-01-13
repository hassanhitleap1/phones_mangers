<?php

use app\models\Phones;
use app\models\UserAction;
use app\models\UserMessage;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
$dataModel=UserMessage::find()->where(['user_id'=>Yii::$app->user->id])->one();
$message=($dataModel==null)?'':$dataModel->text;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PhonesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Phones');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-index">
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
  

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => [
            'class' => 'table table-striped',
        ],
        'options' => [
            'class' => 'table-responsive',
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            [
                'attribute' => 'phone_number',
                'value' => function($searchModel){
                    return "<a href='tel:$searchModel->phone_number'>$searchModel->phone_number</a>";
                },
                'format' => 'html',
            ],
            // 'type_phone',
           // 'status',
            'fullname',
            'title_job',
            // [
            //     'attribute' => 'gender',
            //     'value' => function($searchModel){
            //             if ($searchModel->gender == Phones::MALE) {
            //                 return "ذكر";
            //             } elseif ($searchModel->gender == Phones::FEMALE) {
            //                 # code...
            //                 return "انثى";
            //             } else {
            //                 return 'غير محدد';
            //             }
            //     },
            //     'filter' =>[0=>"غير محدد",1=>" ذكر",2=>" انثى"],
            //     'format' => 'html',
            // ],
            [
                'attribute' => 'status',
                'value' => function ($searchModel) {
                    if($searchModel->userAction !=null){
                        if ($searchModel->userAction->status==UserAction::USER_BUSY){
                            return Yii::t('app',"USER_BUSY");
                        }elseif ($searchModel->userAction->status == UserAction::USER_CALL_LATER) {
                            # code...
                            return Yii::t('app',"USER_CALL_LATER");
                        }elseif ($searchModel->userAction->status == UserAction::USER_CLOSED) {
                            # code...
                            return Yii::t('app',"USER_CLOSED");
                        } elseif ($searchModel->userAction->status == UserAction::USER_DISCONNECTED) {
                            # code...
                            return Yii::t('app',"USER_DISCONNECTED");
                        } elseif ($searchModel->userAction->status == UserAction::USER_IT_WAS_AGREED) {
                            # code...
                            return Yii::t('app',"USER_IT_WAS_AGREED");
                        } elseif ($searchModel->userAction->status == UserAction::USER_OUT_OF_SERVICE) {
                            # code...
                            return Yii::t('app',"USER_OUT_OF_SERVICE");
                        } elseif ($searchModel->userAction->status == UserAction::USER_UNAVAILABLE) {
                            # code...
                            return Yii::t('app',"USER_UNAVAILABLE");
                        } elseif ($searchModel->userAction->status == UserAction::USER_NON_USER) {
                            # code...
                            return Yii::t('app',"USER_NON_USER");
                        }else{
                            # code...
                             return $searchModel->userAction->status;
                        }

                        
                    }elseif($searchModel->status==Phones::ACTIVE) {
                        # code...
                        return Yii::t('app',"ACTIVE");
                    }else{
                       return Yii::t('app',"DISACTIVE");
                    }
                                         
                },
                'format' => 'html',
                'filter' =>[ Phones::ACTIVE=>Yii::t('app','ACTIVE'),
                Phones::DISACTIVE=>Yii::t('app','DISACTIVE'),
                UserAction::USER_OUT_OF_SERVICE=>Yii::t('app','USER_OUT_OF_SERVICE'),
                UserAction::USER_CALL_LATER=>Yii::t('app','USER_CALL_LATER'),
                UserAction::USER_NON_USER=>Yii::t('app','USER_NON_USER'),
                UserAction::USER_IT_WAS_AGREED=>Yii::t('app','USER_IT_WAS_AGREED'),
                UserAction::USER_CLOSED=>Yii::t('app','USER_CLOSED'),
                UserAction::USER_DISCONNECTED=>Yii::t('app','USER_DISCONNECTED'),
                UserAction::USER_UNAVAILABLE=>Yii::t('app','USER_UNAVAILABLE'),
                UserAction::USER_BUSY=>Yii::t('app','USER_BUSY'),
                ]
            ],

            // [
            //     'attribute' => 'governorate_id',
            //     'value' => 'governorate_id.name_ar',
            // ],
          
            // [
            //     'attribute' => 'area_id',
            //     'value' => 'area.name_ar',
            // ],
            // [
            //     'attribute' => 'nationality_id',
            //     'value' => 'nationality.name_ar',
            // ],
            //'date_of_birth',
            //'order',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn','template' => '{view} {update}{sendwhatsapp}',
            'buttons' => [
                            'view' => function ($url, $model) {
                                return Html::button(Yii::t('app', 'lead-view'), ['value' => $url,
                                        'title' => Yii::t('app', 'lead-view'), 
                                        'class' => 'modelshow btn btn-success','data-pjax' => 0]); 
                            },

                            'update' => function ($url, $model) {
                                $urls=$_SERVER['QUERY_STRING'];
                                $urls=$url.str_replace("r=phones%2Findex","", $urls);
                                return Html::button('update', ['value' => $urls,
                                        'title' => Yii::t('app', 'lead-update'), 
                                        'class' => 'update-button btn btn-success','data-pjax' => 0]);
                            },
                            'sendwhatsapp' => function ($url, $model)use($message) {     // render your custom button
                                $phone=substr($model->phone_number, 1);
                                return  Html::a('whatsapp', 
                                "https://api.whatsapp.com/send?phone=962$phone&text=$message", ['target' => '_blank','class' => 'btn btn-info glyphicon glyphicon-envelope', 'data-pjax' => 0]);
                            },
                     
                        ]
            ],
            
        ],
    ]); ?>


<?php
            
    Modal::begin([
            'id'     => 'model',
            'size'   => 'model-lg',
    ]);
    
    echo "<div id='modelContent'></div>";
    
    Modal::end();
            
?>
</div>
<style>

@media screen and (min-width: 768px) {
    #title_message {
        clear: both;
        display: block;
        float: left;
        margin: 10px auto 5px 20px;
        width: 28%;
    }
}
</style>