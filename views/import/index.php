<?php

use app\models\UserMessage;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

 $dataModel=UserMessage::find()->where(['user_id'=>Yii::$app->user->id])->one();
$message=($dataModel==null)?'':$dataModel->text;


/* @var $this yii\web\View */
/* @var $model app\models\UserMessage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-message-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
