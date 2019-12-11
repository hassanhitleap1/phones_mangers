<?php

use app\models\Phones;
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

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
  

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'phone_number',
            'type_phone',
            'status',
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
                'attribute' => 'governorate_id',
                'value' => function($searchModel){
                    return $searchModel->governorate->name_ar;
                },
                'filter' =>[0=>"غير محدد",1=>" ذكر",2=>" انثى"],
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
                                return Html::button(Yii::t('app', 'lead-update'), ['value' => $url,
                                        'title' => Yii::t('app', 'lead-update'), 
                                        'class' => 'update-button btn btn-success','data-pjax' => 0]);
                            },
                     
                        ]
            ],
            
        ],
    ]); ?>

    <?php Pjax::end(); ?>

<?php
            
    Modal::begin([
            'id'     => 'model',
            'size'   => 'model-lg',
    ]);
    
    echo "<div id='modelContent'></div>";
    
    Modal::end();
            
?>
</div>


