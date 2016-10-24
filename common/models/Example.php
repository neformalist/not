<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%example}}".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $title_ru
 * @property string $title_en
 * @property string $updated_at
 * @property string $created_at
 * @property integer $visible
 * @property string $description_ru
 * @property string $description_en
 * @property integer $hits
 * @property string $url
 *
 * @property Category $category
 * @property Images[] $images
 * @property MetaExample[] $metaExamples
 */
class Example extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%example}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'visible', 'hits'], 'integer'],
            [['updated_at', 'created_at'], 'safe'],
            [['description_ru', 'description_en'], 'string'],
            [['title_ru',  'url'], 'required'],
            [['title_ru', 'title_en', 'url'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
            'visible' => 'Visible',
            'description_ru' => 'Description Ru',
            'description_en' => 'Description En',
            'hits' => 'Hits',
            'url' => 'Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Images::className(), ['example_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMetaExamples()
    {
        return $this->hasMany(MetaExample::className(), ['example_id' => 'id']);
    }
}
