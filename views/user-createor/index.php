<?php

use app\models\UserStaticClass;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserCreateorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'User Createors');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-createor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create User Createor'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            'email:email',
            // 'central_id',
            [
              'attribute' =>'central_id',
              'value'=>'central.name_ar'
            ],
            [
                'attribute' =>'type',
                'value'=>function($searchModel){
                    if($searchModel->type == UserStaticClass::USER_NORMAL){
                        return "USER_NORMAL";
                    }elseif($searchModel->type == UserStaticClass::USER_ADMIN){
                        return "USER_ADMIN";
                    }else{
                        return "USER_SUPER_ADMIN";
                    }

                    
                }
              ],
            
            'super_admin_id',
            [
                'attribute' =>'status',
                'value'=>function($searchModel){
                    if($searchModel->type == UserStaticClass::STATUS_ACTIVE){
                        return "STATUS_ACTIVE";
                    }else{
                        return "STATUS_INACTIVE";
                    }

                    
                }
              ],
            'created_at',
            //'updated_at',
            //'verification_token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
