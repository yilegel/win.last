<?php

use yii\db\Migration;

class m160305_005347_article extends Migration
{
    public function safeUp()
    {
        $tableOption = "CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=MyISAM";
        
        $this->createTable('{{%article}}', [
            'id'=>$this->primaryKey(),
            'tittle'=>$this->string(30)->notNull(),
            'description'=>$this->string(50),
            'content'=>$this->text()->notNull(),
        ],$tableOption);
        $this->createIndex('tittle', '{{%article}}', 'tittle', true);
    }

    public function safeDown()
    {
        $this->dropTable('{{%article}}');
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
