<?php

use yii\db\Migration;

class m151126_193936_hw_posts extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%hw_posts}}', [
            'id' => $this->primaryKey(),
            'post_id' => $this->integer(10)->notNull(),
            'title' => $this->string(255)->notNull(),
            'disc' => $this->text()->notNull(),
            'date' => $this->string(50)->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%hw_posts}}');

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
