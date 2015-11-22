<?php

use yii\db\Schema;
use yii\db\Migration;

class m151113_193435_table extends Migration
{
    public function up()
    {
	$this->createTable('people', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(50) NOT NULL',
	        'surname' => Schema::TYPE_STRING . '(50) NOT NULL',
            'age' => Schema::TYPE_INTEGER . '(8) NOT NULL',
            'comments' => Schema::TYPE_TEXT,
	        'date' => Schema::TYPE_INTEGER . '(100) NOT NULL'
        ]);
    }

    public function down()
    {
      	$this->dropTable('people');
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
