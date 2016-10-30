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
            [['text'], 'string'],
            [['first_name', 'email'], 'required'],
            [['email'], 'email'],
            [['created_at'], 'safe'],
            [['new'], 'integer'],
            [['first_name', 'last_name', 'email', 'phone', 'file'], 'string', 'max' => 255],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'text' => 'Text',
            'file' => 'File',
            'created_at' => 'Created At',
            'new' => 'New',
        ];
    }
}
