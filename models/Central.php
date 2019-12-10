<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%central}}".
 *
 * @property int $id
 * @property string|null $name_ar
 */
class Central extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%central}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_ar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_ar' => Yii::t('app', 'Name Ar'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return CentralQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CentralQuery(get_called_class());
    }
}
