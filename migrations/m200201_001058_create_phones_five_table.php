<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%phones_five}}`.
 */
class m200201_001058_create_phones_five_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%phones_five}}', [
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
            'order'=>$this->string(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime(),
        ]);

        $this->execute("ALTER TABLE phones_tow AUTO_INCREMENT = 20000000;");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%phones_five}}');
    }
}
