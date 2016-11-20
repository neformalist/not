<?php

use yii\db\Migration;

class m161024_182417_example extends Migration
{
    public function up()
    {
        $this->createTable('{{example}}', [
            'id'=>$this->primaryKey(),
            'category_id'=>$this->integer(),
            'title_ru'=>$this->string(),
            'title_en'=>$this->string(),
            'updated_at' => $this->timestamp(),
            'created_at' => $this->timestamp(),
            'visible' => $this->smallInteger(1)->defaultValue(0),
            'description_ru'=>$this->text(),
            'description_en'=>$this->text(),
            'hits'=> $this->integer()->defaultValue(0),
            'url' => $this->string()->notNull(),
            
        ]);
        
        $this->addForeignKey('fk-example-category', '{{example}}', 'category_id', '{{category}}', 'id','CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{example}}');
        echo "m161024_182417_example cannot be reverted.\n";

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
