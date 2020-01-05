<?php

use app\models\User;
use app\models\UserAction;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Phones */

$this->title = $model->phone_number;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Phones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="phones-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'phone_number',
            // 'type_phone',
            'status',
            'fullname',
            'title_job',
            [
                'format' => 'raw',
                'attribute' => 'gender',
                'value' => function ($model) {
                    if ($model->gender == User::MALE) {
                        return "ذكر";
                    } elseif ($model->gender == User::FEMALE) {
                        # code...
                        return "انثى";
                    } else {
                        return 'غير محدد';
                    }
                },
                
            ],
           
         
            [
                'format' => 'raw',
                'name' => 'governorate_id',
                'attribute' => 'governorate_id',
                'value' => $model->nationality['name_ar'],
            ],
          
            [
                'format' => 'raw',
                'name' => 'area_id',
                'attribute' => 'area_id',
                'value' => $model->area['name_ar'],
            ],
            [
                'format' => 'raw',
                'name' => 'nationality_id',
                'attribute' => 'nationality_id',
                'value' => $model->nationality['name_ar'],
            ],
            'date_of_birth',
            // 'order',
            'created_at',
            'updated_at',
        ],
    ]) ?>


<?php if($model->userActions != null && count($model->userActions)) :?>
        
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th><?= Yii::t('app','Note')?></th>
                    <th><?= Yii::t('app','Status')?></th>
                    <th><?= Yii::t('app','Created_At')?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($model->userActions as $userAction):?> 
                    <tr>
                        <td><?= $userAction->note?></td>
                        <td>

                            <?php
                                if ($userAction->status==UserAction::USER_BUSY){
                                    echo Yii::t('app',"USER_BUSY");
                                }elseif ($userAction->status == UserAction::USER_CALL_LATER) {
                                    # code...
                                    return Yii::t('app',"USER_CALL_LATER");
                                }elseif ($userAction->status == UserAction::USER_CLOSED) {
                                    # code...
                                    echo Yii::t('app',"USER_CLOSED");
                                } elseif ($userAction->status == UserAction::USER_DISCONNECTED) {
                                    # code...
                                    echo Yii::t('app',"USER_DISCONNECTED");
                                } elseif ($userAction->status == UserAction::USER_IT_WAS_AGREED) {
                                    # code...
                                    echo Yii::t('app',"USER_IT_WAS_AGREED");
                                } elseif ($userAction->status == UserAction::USER_OUT_OF_SERVICE) {
                                    # code...
                                    echo Yii::t('app',"USER_OUT_OF_SERVICE");
                                } elseif ($userAction->status == UserAction::USER_UNAVAILABLE) {
                                    # code...
                                    echo Yii::t('app',"USER_UNAVAILABLE");
                                } elseif ($userAction->status == UserAction::USER_NON_USER) {
                                    # code...
                                    echo Yii::t('app',"USER_NON_USER");
                                }else{
                                    # code...
                                    echo $userAction->status;
                                }

                        ?>
                    
                    
                        </td>
                        <td><?= $userAction->created_at?></td>
                    </tr>
                    <?php endforeach;?>    
            
                </tbody>
            </table>
        </div>
  
    <?php endif;?>
</div>
