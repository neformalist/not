<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%meta}}".
 *
 * @property integer $id
 * @property integer $article_id
 * @property string $desription_ru
 * @property string $keywords_ru
 * @property string $desription_en
 * @property string $keywords_en
 *
 * @property Article $article
 */
class Meta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%meta}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id'], 'integer'],
            [['desription_ru', 'keywords_ru', 'desription_en', 'keywords_en'], 'string'],
            [['article_id'], 'exist', 'skipOnError' => true, 'targetClass' => Article::className(), 'targetAttribute' => ['article_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'Article ID',
            'desription_ru' => 'Desription Ru',
            'keywords_ru' => 'Keywords Ru',
            'desription_en' => 'Desription En',
            'keywords_en' => 'Keywords En',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticle()
    {
        return $this->hasOne(Article::className(), ['id' => 'article_id']);
    }
}
