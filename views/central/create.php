<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Central */

$this->title = Yii::t('app', 'Create Central');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Centrals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="central-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
