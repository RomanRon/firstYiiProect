<?php

namespace app\models;

use Yii;
use dektrium\user\models\User;
use app\models\Category;

/**
 * This is the model class for table "{{%news}}".
 *
 * @property int $id
 * @property string $title
 * @property string $intro_text
 * @property string $full_text
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%news}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'intro_text', 'full_text'], 'required'],
            [['intro_text', 'full_text'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['user_id', 'category_id'], 'integer'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'intro_text' => 'Intro Text',
            'full_text' => 'Full Text',
            'user_id' => 'User ID',
            'category_id' => 'Category ID',
        ];
    }
    public function getUser()
    {
       return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
    public function getCategory()
    {
       return $this->hasOne(User::className(), ['id' => 'category_id']);
    }
}
