<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%user_action}}".
 * Busy مشغول 
 *  Unavailable  غير متاح 
 * out of service خارج التغطية 
 * Call later الاتصال لاحقا 
 * Non-user غير مستخدم 
 * It was agreed تم الاتفاق معه 
 * Closed  مغلق 
 * Disconnected  مفصول 
 * @property int $id
 * @property int|null $phone_id
 * @property int|null $status
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class UserAction extends \yii\db\ActiveRecord
{
    const USER_BUSY=0;
    const USER_UNAVAILABLE = 1;
    const USER_OUT_OF_SERVICE = 2;
    const USER_CALL_LATER = 3;
    const USER_NON_USER = 4;
    const USER_IT_WAS_AGREED = 5;
    const USER_CLOSED=6;
    const USER_DISCONNECTED = 7;
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
            'created_at' => Yii::t('app', 'Created_At'),
            'updated_at' => Yii::t('app', 'Updated_At'),
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
