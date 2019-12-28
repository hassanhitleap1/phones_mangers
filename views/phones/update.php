<?php

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

</div>
