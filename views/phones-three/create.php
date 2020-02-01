<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Phones */

$this->title = Yii::t('app', 'Create Phones');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Phones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
