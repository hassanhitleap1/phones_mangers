<?php

use yii\db\Migration;

/**
 * Class m191210_120806_cerate_central_table
 */
class m191210_120806_cerate_central_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%central}}', [
            'id' => $this->primaryKey(),
            'name_ar' => $this->string(),

        ], $tableOptions);
 
    }

    public function down()
    {
        $this->dropTable('{{%central}}');
    }
}
