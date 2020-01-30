<?php

use app\models\User;
use Carbon\Carbon;
use yii\db\Migration;

/**
 * Class m191210_104921_cretae_user_table
 */
class m191210_104921_cretae_user_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'central_id'=>$this->integer(),
            'type'=>$this->smallInteger(),
            'super_admin_id'=>$this->integer(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
        ], $tableOptions);


        $data = [
            [
                'username' => 'hassanki',
                'auth_key' => 'asdasdasdcsfsdvdfs',
                'email'=>'hassankiwan92@gmail.com',
                'password_hash' => Yii::$app->getSecurity()->generatePasswordHash("programerhk92"),
                'type' => User::USER_SUPER_ADMIN,
                'created_at' => Carbon::now('Asia/Amman')->toDateTimeString(),
                'updated_at' =>Carbon::now('Asia/Amman')->toDateTimeString(),
            ]
        ];
        Yii::$app->db
            ->createCommand()
            ->batchInsert('user', ['username', 'auth_key', "email","password_hash", "type","created_at","updated_at"], $data)
            ->execute();
    }
    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
