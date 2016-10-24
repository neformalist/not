<?php

use yii\db\Migration;

class m161024_183803_meta_example extends Migration
{
    public function up()
    {
        $this->createTable('{{meta_example}}', [
            'id'=>$this->primaryKey(),
            'example_id'=>$this->integer(),
            'description_ru'=>$this->text(),
            'keywords_ru'=>$this->text(),
            'description_en'=>$this->text(),
            'keywords_en'=>$this->text()
        ]);
        
        $this->addForeignKey('fk-meta-example', '{{meta_example}}', 'example_id', '{{example}}', 'id','CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{meta_example}}');
        
        echo "m161024_183803_meta_example cannot be reverted.\n";

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
