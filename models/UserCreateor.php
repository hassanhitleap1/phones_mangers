<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property int $id
 * @property string $username
 * @property string $password_hash
 * @property string $email
 * @property int|null $central_id
 * @property int|null $type
 * @property int|null $super_admin_id
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class UserCreateor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password_hash', 'email'], 'required'],
            [['central_id', 'type', 'super_admin_id', 'status' ], 'integer'],
            [['username', 'password_hash',  'email'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password_hash' => Yii::t('app', 'Password'),
            'email' => Yii::t('app', 'Email'),
            'central_id' => Yii::t('app', 'Central_ID'),
            'type' => Yii::t('app', 'Type'),
            'super_admin_id' => Yii::t('app', 'Super_Admin_ID'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created_At'),
            'updated_at' => Yii::t('app', 'Updated_At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserQuery(get_called_class());
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if($this->isNewRecord){
                $this->password_hash = Yii::$app->security->generatePasswordHash($this->password_hash);
                $this->auth_key = Yii::$app->security->generateRandomString();
                $this->verification_token = Yii::$app->security->generateRandomString() . '_' . time();

            }else{
                $this->password_hash = Yii::$app->security->generatePasswordHash($this->password_hash);
            }
            return true;
        }
        return false;
    }

        /**
     * @return \yii\db\ActiveQuery
     */
    public function getCentral()
    {
        return $this->hasOne(Central::className(), ['id' => 'central_id']);
    }
}
