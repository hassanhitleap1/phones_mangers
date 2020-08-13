<?php

use yii\db\Migration;

/**
 * Class m200202_140030_create_phones_tables
 */
class m200202_140030_create_phones_tables extends Migration
{
    public $countTable=240;
    public function safeUp()
    {
        for ($i=1;$i<=$this->countTable;$i++){
            $this->createTable("phones_$i", [
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

            $index_from= ($i - 1)*(30000000/$this->countTable) ;
            $this->execute("ALTER TABLE phones_$i AUTO_INCREMENT =".$index_from.";");


        }

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        for ($i=1;$i<=$this->countTable;$i++) {
            $this->dropTable("phones_$i");
        }
    }
}
