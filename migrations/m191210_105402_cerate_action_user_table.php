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
            'status' => $this->smallInteger(),
            'user_id' => $this->integer(),
            'note' => $this->text(),
            'central_id'=> $this->integer(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ], $tableOptions);
    }
    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
