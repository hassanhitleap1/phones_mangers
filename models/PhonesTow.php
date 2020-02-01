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
class PhonesTow extends \yii\db\ActiveRecord
{
    const UMNIAH = 0;
    const ZAIN = 1;
    const ORANGE = 2;
    const DISACTIVE = 0;
    const ACTIVE = 1;
    const UNDEFINED=0;
    const MALE = 1;
    const FEMALE = 2;

    public $note;
    public $status_central;
    public $users;
    public $created_at_action;
    public $from;
    public $to;


    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%phones_tow}}';
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
            'phone_number' => Yii::t('app', 'Phone_Number'),
            'type_phone' => Yii::t('app', 'Type_Phone'),
            'status' => Yii::t('app', 'Status'),
            'fullname' => Yii::t('app', 'Fullname'),
            'title_job' => Yii::t('app', 'Title_Job'),
            'gender' => Yii::t('app', 'Gender'),
            'governorate_id' => Yii::t('app', 'Governorate_ID'),
            'area_id' => Yii::t('app', 'Area_ID'),
            'nationality_id' => Yii::t('app', 'Nationality_ID'),
            'date_of_birth' => Yii::t('app', 'Date_Of_Birth'),
            'order' => Yii::t('app', 'Order'),
            'created_at' => Yii::t('app', 'Created_At'),
            'updated_at' => Yii::t('app', 'Updated_At'),
            'status_central' => Yii::t('app', 'Status'),
            'note'=>Yii::t('app', 'Note'),
            'from'=>Yii::t('app', 'From'),
            'to'=>Yii::t('app', 'To'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return PhonesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PhonesTowQuery(get_called_class());
    }



     /**
     * @return \yii\db\ActiveQuery
     */
    public function getNationality()
    {
        return $this->hasOne(Nationality::className(), ['id' => 'nationality_id']);
    }



      /**
     * @return \yii\db\ActiveQuery
     */
    public function getGovernorate()
    {
        return $this->hasOne(Governorate::className(), ['id' => 'governorate_id']);
    }
  
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArea()
    {
        return $this->hasOne(Area::className(), ['id' => 'area_id']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserAction()
    {
        return $this->hasOne(UserAction::className(), ['phone_id' => 'id'])
            ->where(['user_id' => Yii::$app->user->id])
            ->orderBy('created_at','ASC');
    }

      /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserActions()
    {
        return $this->hasMany(UserAction::className(), ['phone_id' => 'id'])
        ->where(['user_id' => Yii::$app->user->id]);
    }
}
