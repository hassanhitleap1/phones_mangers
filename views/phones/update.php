<?php

use app\models\UserAction;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Phones */

$this->title = Yii::t('app', 'Update Phones: {name}', [
    'name' => $model->phone_number,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Phones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="phones-update">

    <?= $this->render('_form', [
        'model' => $model,
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
