<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rubrics".
 *
 * @property int $id id столбца
 * @property int|null $parent_id
 * @property string $name рубрика
 *
 * @property NewsRubrics[] $newsRubrics
 * @property News[] $news
 */
class Rubrics extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'rubrics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['parent_id'], 'integer'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'id столбца',
            'parent_id' => 'Parent ID',
            'name' => 'рубрика',
        ];
    }

    /**
     * Gets query for [[NewsRubrics]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNewsRubrics() {
        return $this->hasMany(NewsRubrics::className(), ['rubrics_id' => 'id']);
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNews() {
        return $this->hasMany(News::className(), ['id' => 'news_id'])->viaTable('news_rubrics', ['rubrics_id' => 'id']);
    }

    /**
     * Gets query for [[Rubrics]].
     *
     * @return \yii\db\ActiveQuery
     */
    static public function listСhildren($id) {
        return self::find()->where(['parent_id' => $id])->all();
    }

}
