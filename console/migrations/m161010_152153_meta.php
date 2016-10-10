<?php

use yii\db\Migration;

class m161010_152153_meta extends Migration
{
    public function up()
    {
        $this->createTable('{{meta}}', [
            'id'=>$this->primaryKey(),
            'article_id'=>$this->integer(),
            'desription_ru'=>$this->text(),
            'keywords_ru'=>$this->text(),
            'desription_en'=>$this->text(),
            'keywords_en'=>$this->text()
        ]);
        
        $this->addForeignKey('fk-meta-article', '{{meta}}', 'article_id', '{{article}}', 'id','CASCADE', 'RESTRICT');
    }

    public function down()
    {
        
        $this->dropTable('{{meta}}');
        echo "m161010_152153_meta cannot be reverted.\n";

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
