<?php

use yii\db\Migration;

class m161010_151701_text extends Migration
{
    public function up()
    {
        $this->createTable('{{text}}', [
            'id'=>$this->primaryKey(),
            'article_id'=>$this->integer(),
            'text_ru'=>$this->text(),
            'text_en'=>$this->text(),
        ]);
        
        $this->addForeignKey('fk-text-article', '{{text}}', 'article_id', '{{article}}', 'id','CASCADE', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{text}}');
        
        echo "m161010_151701_text cannot be reverted.\n";

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
