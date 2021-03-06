<?php

use app\models\Area;
use app\models\Governorate;
use app\models\Nationality;
use Carbon\Carbon;
use conquer\select2\Select2Widget;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Phones */
/* @var $form yii\widgets\ActiveForm */
$date=($model->isNewRecord)?Carbon::now("Asia/Amman"):$model->created_at;
$note= ($model->userAction !=null) ? $model->userAction->note:''; ;
$status_user=($model->userAction !=null) ? $model->userAction->status:2;
$today=Carbon::now("Asia/Amman");

?>

<div class="phones-form">

    <?php $form = ActiveForm::begin([
                'options' => [
                    'id' => 'create-product-form'
                ]
    ]); ?>
    
    

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true,'disabled'=>true]) ?>
        </div>
        <div class="col-md-6">

        <?= $form->field($model, 'status')->dropDownList([
                1=> Yii::t('app','ACTIVE'),
                0=> Yii::t('app','DISACTIVE'),
                
                    ]) ?>
        </div>
    </div>
    

    <div class="row">
        <div class="col-md-6">
              <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'title_job')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    
    <div class="row">
        <div class="col-md-6">
             <?= $form->field($model, "gender")->dropDownList([1 => "ذكر", 2 => "انثى"]); ?> 
        </div>
        <div class="col-md-6">
        <?= $form->field($model, 'governorate_id')->widget(
                Select2Widget::className(),
                [
                    'items' => ArrayHelper::map(Governorate::find()->all(), 'id', 'name_ar')
                ]
            ); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
        <?= $form->field($model, 'area_id')->widget(
                Select2Widget::className(),
                [
                    'items' => ArrayHelper::map(Area::find()->all(), 'id', 'name_ar')
                ]
            ); ?>
            
        </div>
        <div class="col-md-6">
        <?= $form->field($model, 'nationality_id')->widget(
                Select2Widget::className(),
                [
                    'items' => ArrayHelper::map(Nationality::find()->all(), 'id', 'name_ar')
                ]
            ); ?>

        </div>
    </div>

   
    <div class="row">
        <div class="col-md-6">
        <?= $form->field($model, 'note')->textarea([ 'value' => $note]) ?>
            
        </div>
        <div class="col-md-6">
        <?= $form->field($model, 'status_central')->dropDownList([
               2=> Yii::t('app','USER_OUT_OF_SERVICE') ,
               3 =>Yii::t('app','USER_CALL_LATER' ),
               4=>Yii::t('app','USER_NON_USER'),
               5 =>Yii::t('app','USER_IT_WAS_AGREED'),
               6 => Yii::t('app','USER_CLOSED'),
               7 =>Yii::t('app','USER_DISCONNECTED') ,
               8 =>Yii::t('app','USER_UNAVAILABLE') ,
               9 =>Yii::t('app','USER_BUSY')]
            ,
            ['options' =>
                [                        
                    $status_user => ['selected' => true]
                ]
            ]) ?>

        </div>
    </div>

    


    <?= $form->field($model, 'date_of_birth')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => Yii::t('app', 'Enter_date')],
                'value' => Carbon::now('Asia/Amman')->toDateString(),
                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                // 'value'=>Carbon::now('Asia/Amman')->toDateString(),
                // 'pickerIcon' => '<i class=" text-primary"></i>',
                // 'removeIcon' => '<i class="fas fa-trash text-danger"></i>',
                'pluginOptions' => [
                    'todayHighlight' => true,
                    'todayBtn' => true,
                    'autoclose' => false,
                    'format' => 'yyyy-mm-dd',


                ]
            ]); ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
