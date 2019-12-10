<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%user_action}}".
 *
 * @property int $id
 * @property int|null $phone_id
 * @property int|null $status
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class UserAction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user_action}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone_id', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'phone_id' => Yii::t('app', 'Phone ID'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return UserActionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserActionQuery(get_called_class());
    }
}
