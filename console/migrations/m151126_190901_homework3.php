<?php

use yii\db\Migration;

class m151126_190901_homework3 extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
           $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%hw_user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(16)->notNull(),
            'usermail' =>$this->string(30)->notNull(),
            'phone' =>$this->string(13)->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%hw_user}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
