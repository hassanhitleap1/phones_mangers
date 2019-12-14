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
$today=Carbon::now("Asia/Amman");

?>

<div class="phones-form">

    <?php $form = ActiveForm::begin([
                'options' => [
                    'id' => 'create-product-form'
                ]
    ]); ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true,'disabled'=>true]) ?>

    <?= $form->field($model, 'status')->dropDownList([
            0=> 'DISACTIVE',
            1=> 'ACTIVE',
            2=> 'USER_OUT_OF_SERVICE' ,
            3 =>'USER_CALL_LATER' ,
            4=>' USER_NON_USER',
            5 =>'USER_IT_WAS_AGREED ',
            6 => 'USER_CLOSED',
            7 =>'USER_DISCONNECTED' ,
            8 =>'USER_UNAVAILABLE' ,
            9 =>'USER_BUSY' 
            ]) ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, "gender")->dropDownList([1 => "ذكر", 2 => "انثى"]); ?>

    <?= $form->field($model, 'governorate_id')->widget(
                Select2Widget::className(),
                [
                    'items' => ArrayHelper::map(Governorate::find()->all(), 'id', 'name_ar')
                ]
            ); ?>

    <?= $form->field($model, 'area_id')->widget(
                Select2Widget::className(),
                [
                    'items' => ArrayHelper::map(Area::find()->all(), 'id', 'name_ar')
                ]
            ); ?>


    <?= $form->field($model, 'nationality_id')->widget(
                Select2Widget::className(),
                [
                    'items' => ArrayHelper::map(Nationality::find()->all(), 'id', 'name_ar')
                ]
            ); ?>



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
