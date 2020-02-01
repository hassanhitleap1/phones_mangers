<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%phones_four}}`.
 */
class m200201_001047_create_phones_four_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%phones_four}}', [
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

        $this->execute("ALTER TABLE phones_tow AUTO_INCREMENT = 15000000;");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%phones_four}}');
    }
}
