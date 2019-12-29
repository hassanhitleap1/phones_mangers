<?php

use app\models\Phones;
use app\models\UserAction;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PhonesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Phones');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
  

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'phone_number',
            // 'type_phone',
           // 'status',
            'fullname',
            'title_job',
            [
                'attribute' => 'gender',
                'value' => function($searchModel){
                        if ($searchModel->gender == Phones::MALE) {
                            return "ذكر";
                        } elseif ($searchModel->gender == Phones::FEMALE) {
                            # code...
                            return "انثى";
                        } else {
                            return 'غير محدد';
                        }
                },
                'filter' =>[0=>"غير محدد",1=>" ذكر",2=>" انثى"],
                'format' => 'html',
            ],
            [
                'attribute' => 'status',
                'value' => function ($searchModel) {
                    if($searchModel->userAction !=null){
                        if ($searchModel->userAction->status==UserAction::USER_BUSY){
                            return "USER_BUSY";
                        }elseif ($searchModel->userAction->status == UserAction::USER_CALL_LATER) {
                            # code...
                            return "USER_CALL_LATER";
                        }elseif ($searchModel->userAction->status == UserAction::USER_CLOSED) {
                            # code...
                            return "USER_CLOSED";
                        } elseif ($searchModel->userAction->status == UserAction::USER_DISCONNECTED) {
                            # code...
                            return "USER_DISCONNECTED";
                        } elseif ($searchModel->userAction->status == UserAction::USER_IT_WAS_AGREED) {
                            # code...
                            return "USER_IT_WAS_AGREED";
                        } elseif ($searchModel->userAction->status == UserAction::USER_OUT_OF_SERVICE) {
                            # code...
                            return "USER_OUT_OF_SERVICE";
                        } elseif ($searchModel->userAction->status == UserAction::USER_UNAVAILABLE) {
                            # code...
                            return "USER_UNAVAILABLE";
                        } elseif ($searchModel->userAction->status == UserAction::USER_NON_USER) {
                            # code...
                            return "USER_NON_USER";
                        }else{
                            # code...
                             return $searchModel->userAction->status;
                        }

                        
                    }elseif($searchModel->status==Phones::ACTIVE) {
                        # code...
                        return "ACTIVE";
                    }else{
                       return "disactive";
                    }
                                         
                },
                'format' => 'html',
            ],

            [
                'attribute' => 'governorate_id',
                'value' => function($searchModel){
                    return $searchModel->governorate['name_ar'];
                },
    
                'format' => 'html',
            ],
            'area.name_ar',
            'nationality.name_ar',
            'date_of_birth',
            //'order',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn','template' => '{view} {update}',
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


