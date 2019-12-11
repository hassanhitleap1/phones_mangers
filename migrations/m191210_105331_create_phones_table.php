<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%phones}}`.
 */
class m191210_105331_create_phones_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%phones}}', [
            'id' => $this->primaryKey(),
            'phone_number'=>$this->string(),
            'type_phone'=>$this->tinyInteger(2),
            'status'=>$this->tinyInteger(),
            'fullname'=>$this->string(),
            'title_job'=>$this->string(),
            'gender'=>$this->tinyInteger(),
            'governorate_id'=>$this->integer(),
            'area_id'=>$this->integer(),
            'nationality_id'=>$this->integer(),
            'date_of_birth'=>$this->dateTime(),
            'order'=>$this->integer(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%phones}}');
    }
}
