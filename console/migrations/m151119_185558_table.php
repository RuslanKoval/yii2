<?php

use yii\db\Schema;
use yii\db\Migration;

class m151119_185558_table extends Migration
{
    public function up()
    {
        $this->createTable('addUser', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(50) NOT NULL',
            'surname' => Schema::TYPE_STRING . '(50) NOT NULL',
            'email' => Schema::TYPE_STRING . '(50) NOT NULL',
            'phone' => Schema::TYPE_STRING . '(20) NOT NULL',
            'photo' => Schema::TYPE_STRING . '(255) NOT NULL',
            'vk' => Schema::TYPE_STRING . '(50) NOT NULL',
            'role' => Schema::TYPE_INTEGER . '(5) NOT NULL',
            'date' => Schema::TYPE_INTEGER . '(100) NOT NULL',
            'lang' => Schema::TYPE_STRING . '(50) NOT NULL',
            'about' => Schema::TYPE_STRING . '(255) NOT NULL'

        ]);
    }

    public function down()
    {
        $this->dropTable('addUser');
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
