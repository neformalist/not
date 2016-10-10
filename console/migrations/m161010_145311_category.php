<?php

use yii\db\Migration;

class m161010_145311_category extends Migration
{
    public function up()
    {
        $this->createTable('{{category}}', [
            'id'=>$this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'parent'=>$this->integer()
        ]);
        
        $this->createIndex('idx-category-parent', '{{category}}', 'parent');
        
        $this->addForeignKey('fk-category-parent', '{{category}}', 'parent', '{{category}}', 'id','CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{category}}');
        
        echo "m161010_145311_category cannot be reverted.\n";

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
