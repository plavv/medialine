<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id id столбца
 * @property string $title Заголовок новости
 * @property string|null $body Текст
 *
 * @property NewsRubrics[] $newsRubrics
 * @property Rubrics[] $rubrics
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['body'], 'string'],
            [['title'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id столбца',
            'title' => 'Заголовок новости',
            'body' => 'Текст',
        ];
    }

    /**
     * Gets query for [[NewsRubrics]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNewsRubrics()
    {
        return $this->hasMany(NewsRubrics::className(), ['news_id' => 'id']);
    }

    /**
     * Gets query for [[Rubrics]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRubrics()
    {
        return $this->hasMany(Rubrics::className(), ['id' => 'rubrics_id'])->viaTable('news_rubrics', ['news_id' => 'id']);
    }
}
