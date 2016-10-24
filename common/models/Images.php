<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%images}}".
 *
 * @property integer $id
 * @property integer $example_id
 * @property string $image
 * @property integer $visible
 *
 * @property Example $example
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%images}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['example_id', 'visible'], 'integer'],
            [['image'], 'string', 'max' => 255],
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
            'image' => 'Image',
            'visible' => 'Visible',
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
