<?php

use yii\db\Migration;

/**
 * Class m191210_105402_cerate_action_user_table
 */
class m191210_105402_cerate_action_user_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%user_action}}', [
            'id' => $this->primaryKey(),
            'phone_id' => $this->integer(),
            'status' => $this->smallInteger()->defaultValue(10),
            'created_at' => $this->date(),
            'updated_at' => $this->date(),
        ], $tableOptions);
    }
    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
