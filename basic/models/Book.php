<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $name 图书名称
 * @property string $author 作者
 * @property string $published_date 出版时间
 * @property string $price 图书价格
 * @property string $publisher 出版社
 * @property string $create_time 创建时间
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['published_date', 'create_time'], 'safe'],
            [['name', 'author', 'price', 'publisher'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '书名',
            'author' => '作者',
            'published_date' => '出版时间',
            'price' => '价格',
            'publisher' => '出版社',
            'create_time' => '发布时间',
        ];
    }
}
