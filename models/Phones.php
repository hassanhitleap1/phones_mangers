<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%phones}}".
 *
 * @property int $id
 * @property string|null $phone_number
 * @property int|null $type_phone
 * @property int|null $status
 * @property string|null $fullname
 * @property string|null $title_job
 * @property int|null $gender
 * @property int|null $governorate_id
 * @property int|null $area_id
 * @property int|null $nationality_id
 * @property string|null $date_of_birth
 * @property int|null $order
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Phones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%phones}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_phone', 'status', 'gender', 'governorate_id', 'area_id', 'nationality_id', 'order'], 'integer'],
            [['date_of_birth', 'created_at', 'updated_at'], 'safe'],
            [['phone_number', 'fullname', 'title_job'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'type_phone' => Yii::t('app', 'Type Phone'),
            'status' => Yii::t('app', 'Status'),
            'fullname' => Yii::t('app', 'Fullname'),
            'title_job' => Yii::t('app', 'Title Job'),
            'gender' => Yii::t('app', 'Gender'),
            'governorate_id' => Yii::t('app', 'Governorate ID'),
            'area_id' => Yii::t('app', 'Area ID'),
            'nationality_id' => Yii::t('app', 'Nationality ID'),
            'date_of_birth' => Yii::t('app', 'Date Of Birth'),
            'order' => Yii::t('app', 'Order'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return PhonesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PhonesQuery(get_called_class());
    }
}
