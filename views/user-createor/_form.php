<?php

use app\models\Central;
use app\models\User;
use app\models\UserCreateor;
use app\models\UserStaticClass;
use conquer\select2\Select2Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$type=User::USER_NORMAL;
$heddinType=(!UserStaticClass::isSuperUser())?true:false;

/* @var $this yii\web\View */
/* @var $model app\models\UserCreateor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-createor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'central_id')->widget(
                Select2Widget::className(),
                [
                    'items' => ArrayHelper::map(Central::find()->all(), 'id', 'name_ar')
                ]
            ); ?>

    <?= $form->field($model, 'type')->dropDownList([
                        User::USER_NORMAL => Yii::t('app',"USER_NORMAL"),
                        User::USER_ADMIN => Yii::t('app',"USER_ADMIN"),
                        User::USER_SUPER_ADMIN => Yii::t('app',"USER_SUPER_ADMIN")
             ],['value'=>$type,'disabled' =>$heddinType] ) ?>

   <?php 
            if(!$heddinType){
                echo  $form->field($model, 'super_admin_id')->widget(
                    Select2Widget::className(),
                    [
                        'items' => ArrayHelper::map(UserCreateor::find()->where(['type'=>User::USER_ADMIN])->all(), 'id', 'username')
                    ]); 
            }
    ?>

    <?= $form->field($model, 'status')->dropDownList([
                        User::STATUS_ACTIVE => Yii::t('app',"STATUS_ACTIVE"),
                        User::STATUS_INACTIVE => Yii::t('app',"STATUS_INACTIVE")
        ],['disabled' =>$heddinType])  ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
