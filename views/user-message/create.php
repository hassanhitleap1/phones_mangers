<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserMessage */

$this->title = Yii::t('app', 'Create User Message');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Messages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-message-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
