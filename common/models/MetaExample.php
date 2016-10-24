<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%meta_example}}".
 *
 * @property integer $id
 * @property integer $example_id
 * @property string $description_ru
 * @property string $keywords_ru
 * @property string $description_en
 * @property string $keywords_en
 *
 * @property Example $example
 */
class MetaExample extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%meta_example}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['example_id'], 'integer'],
            [['description_ru', 'keywords_ru', 'description_en', 'keywords_en'], 'string'],
            [['example_id'], 'exist', 'skipOnError' => true, 'targetClass' => Example::className(), 'targetAttribute' => ['example_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'example_id' => 'Example ID',
            'description_ru' => 'Description Ru',
            'keywords_ru' => 'Keywords Ru',
            'description_en' => 'Description En',
            'keywords_en' => 'Keywords En',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExample()
    {
        return $this->hasOne(Example::className(), ['id' => 'example_id']);
    }
}
