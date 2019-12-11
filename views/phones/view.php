<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Phones */

$this->title = $model->phone_number;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Phones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="phones-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'phone_number',
            'type_phone',
            'status',
            'fullname',
            'title_job',
            'gender',
            'governorate_id',
            'area_id',
            'nationality_id',
            'date_of_birth',
            'order',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
