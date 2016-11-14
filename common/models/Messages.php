<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%messages}}".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $text
 * @property string $file
 * @property string $created_at
 * @property integer $new
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%messages}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'email'], 'required'],
            [['email'], 'email'],
            [['text'], 'string', 'max' => 900],
            [['created_at'], 'safe'],
            [['new'], 'integer'],
            [['first_name', 'last_name', 'email','phone', 'file'], 'string', 'max' => 100, 'min' => 2],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => Yii::t('contact', 'first_name'),
            'last_name' => Yii::t('contact', 'last_name'),
            'email' => 'Email',
            'phone' => Yii::t('contact', 'phone'),
            'text' => Yii::t('contact', 'text'),
            'file' => Yii::t('contact', 'file'),
            'created_at' => 'Created At',
            'new' => 'New',
        ];
    }
}
