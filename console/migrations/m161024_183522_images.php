<?php

use yii\db\Migration;

class m161024_183522_images extends Migration
{
    public function up()
    {
        $this->createTable('{{images}}', [
            'id'=>$this->primaryKey(),
            'example_id'=>$this->integer(),
            'image'=>$this->string(),
            'visible' => $this->smallInteger(1)->defaultValue(0),
        ]);
        
        $this->addForeignKey('fk-example-images', '{{images}}', 'example_id', '{{example}}', 'id','CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{images}}');
        
        echo "m161024_183522_images cannot be reverted.\n";

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
