<?php

use yii\db\Migration;

class m161030_190731_messages extends Migration
{
    public function up()
    {   
        $this->createTable('{{messages}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->string(),
            'text' => $this->text(),
            'file' => $this->string(),
            'created_at' => $this->timestamp(),
            'new' => $this->smallInteger(1)->defaultValue(1)
            
        ]);

    }

    public function down()
    {
        $this->dropTable('{{messages}}');
        
        echo "m161030_190731_messages cannot be reverted.\n";

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
