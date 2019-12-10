<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Central */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="central-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_ar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
