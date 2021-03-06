<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserCreateor */

$this->title = Yii::t('app', 'Create User Createor');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Createors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-createor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
