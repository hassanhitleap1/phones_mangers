<?php

use app\models\User;
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
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'phone_number',
            // 'type_phone',
            'status',
            'fullname',
            'title_job',
            [
                'format' => 'raw',
                'attribute' => 'gender',
                'value' => function ($model) {
                    if ($model->gender == User::MALE) {
                        return "ذكر";
                    } elseif ($model->gender == User::FEMALE) {
                        # code...
                        return "انثى";
                    } else {
                        return 'غير محدد';
                    }
                },
                
            ],
           
         
            [
                'format' => 'raw',
                'name' => 'governorate_id',
                'attribute' => 'governorate_id',
                'value' => $model->nationality['name_ar'],
            ],
          
            [
                'format' => 'raw',
                'name' => 'area_id',
                'attribute' => 'area_id',
                'value' => $model->area['name_ar'],
            ],
            [
                'format' => 'raw',
                'name' => 'nationality_id',
                'attribute' => 'nationality_id',
                'value' => $model->nationality['name_ar'],
            ],
            'date_of_birth',
            // 'order',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
