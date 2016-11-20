<?php

namespace common\models;

use Yii;
use zabachok\behaviors\SluggableBehavior;
/**
 * This is the model class for table "{{%article}}".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $title
 * @property string $updated_at
 * @property string $created_at
 * @property integer $visible
 * @property string $description
 * @property string $author
 * @property integer $hits
 * @property string $url
 *
 * @property Category $category
 * @property Meta[] $metas
 * @property Text[] $texts
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public function behaviors(){
     
        return [
                [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title_ru',
                'slugAttribute' => 'url',
                'immutable' => true,
                ]
            ];
    }
    
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'visible', 'hits'], 'integer'],
            [['updated_at', 'created_at'], 'safe'],
            [['url'], 'string'],
            [['description_en', 'description_ru'], 'string'],
            [['title_ru'], 'required'],
            [['title_en'], 'string'],
            [['image'], 'string'],
            [['title_ru', 'title_en', 'author'], 'string', 'max' => 255],
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
            'title_ru' => 'Title RU',
            'title_en' => 'Title EN',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
            'visible' => 'Visible',
            'description_ru' => 'Description RU',
            'description_en' => 'Description En',
            'author' => 'Author',
            'hits' => 'Hits',
            'url' => 'Url',
            'image' => 'IMAGE',
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
    public function getMetas()
    {
        return $this->hasMany(Meta::className(), ['article_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTexts()
    {
        return $this->hasMany(Text::className(), ['article_id' => 'id']);
    }
}
