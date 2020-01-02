<?php

use app\models\User;
use app\models\UserStaticClass;
use Carbon\Carbon;
use conquer\select2\Select2Widget;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$users=(UserStaticClass::isSuperUser())?
            User::find()->all():
            (UserStaticClass::isAdminUser())?
                User::find()->where(['central_id'=> Yii::$app->user->identity->central_id])->all():
                        User::find()->where(['id'=> Yii::$app->user->id])->all();
/* @var $this yii\web\View */
/* @var $model app\models\PhonesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>


<div class="row">
        <?php if(!UserStaticClass::isNormalUser()):?>
        <div class="col-md-4">
            <?= $form->field($model, 'users')->widget(
                Select2Widget::className(),
                [
                    'items' => ArrayHelper::map($users, 'id', 'username')
                ]
            ); ?>

            
        </div>
        <?php endif;?>
        <div class="col-md-4">
            <?= $form->field($model, 'from')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => Yii::t('app', 'From')],
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

       

        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'to')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => Yii::t('app', 'To')],
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

       

        </div>
    </div>



    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
