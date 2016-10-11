<?php

use yii\db\Migration;

class m161010_150111_article extends Migration
{
    public function up()
    {
        $this->createTable('{{article}}', [
            'id'=>$this->primaryKey(),
            'category_id'=>$this->integer(),
            'title'=>$this->string(),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'created_at' => $this->timestamp(),
            'visible' => $this->smallInteger(1)->defaultValue(0),
            'description' => $this->text(500),
            'author' => $this->string(),
            'hits'=> $this->integer(),
            'url' => $this->string()->notNull(),
            'image'=> $this->string()
        ]);
        
        $this->createIndex('idx-article-title', '{{article}}', 'title');
        
        
        $this->addForeignKey('fk-article-category', '{{article}}', 'category_id', '{{category}}', 'id','CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{article}}');
        
        echo "m161010_150111_article cannot be reverted.\n";

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
