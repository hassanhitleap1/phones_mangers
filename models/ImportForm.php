<?php


namespace app\models;


class ImportForm extends \yii\base\Model
{
    public $file;

    /**
     * @do for validation
     * @return array
     */
    public function rules()
    {
        return [
            [['file'], 'file'],
            [['file'], 'required'],
        ];
    }

}