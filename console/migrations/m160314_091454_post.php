<?php

use yii\db\Migration;

class m160314_091454_post extends Migration
{
    public function up()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(30)->notNull(),
            'author' => $this->string(10)->notNull(),
            'description' => $this->string(255)->notNull(),
            'content' => $this->text(),
            
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], 'engine=MyISAM');
        
        $this->createIndex('name_name', '{{%post}}', 'name');
    }

    public function down()
    {
        echo "m160314_091454_post cannot be reverted.\n";

        return false;
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
