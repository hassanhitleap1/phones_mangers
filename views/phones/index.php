<?php

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
            //'title_job',
            //'gender',
            //'governorate_id',
            //'area_id',
            //'nationality_id',
            'date_of_birth',
            //'order',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn','template' => '{view} {update}',
            'buttons' => [
                            'view' => function ($url, $model) {
                                return Html::button(Yii::t('app', 'lead-view'), ['value' => $url,
                                        'title' => Yii::t('app', 'lead-view'), 
                                        'class' => 'loadMainContent btn btn-success',
                                        'id'=>"modelshow",'data-pjax' => 0]); 
                            },

                            'update' => function ($url, $model) {
                                return Html::button(Yii::t('app', 'lead-update'), ['value' => $url,
                                        'title' => Yii::t('app', 'lead-update'), 
                                        'class' => 'loadMainContent btn btn-success',
                                         'id'=>"modelbutton",'data-pjax' => 0]);
                            },
                     
                        ]
            ],
            
        ],
    ]); ?>

    <?php Pjax::end(); ?>
    <?php
$script = <<< JS
$(document).on('click', '#modelbutton', function(){
    url=$(this).attr('value');
    $('#model').load(url).modal({ show: true });;
});

});





JS;
$this->registerJs($script);
?>
    <?php
        Modal::begin([
            'header'=>'<h4 id="modalHeader">send sms</h4>',
            'id'=>'model',
            'size'=>'model-lg'
            ]);
        echo '<div id="main-content"></div>';
        Modal::end();
    ?>

</div>


