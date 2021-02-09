<?php

namespace app\models;

use Yii;
use app\models\Rubrics;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "news_rubrics".
 *
 * @property int $news_id
 * @property int $rubrics_id
 *
 * @property News $news
 * @property Rubrics $rubrics
 */
class NewsRubrics extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'news_rubrics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['news_id', 'rubrics_id'], 'required'],
            [['news_id', 'rubrics_id'], 'integer'],
            [['news_id', 'rubrics_id'], 'unique', 'targetAttribute' => ['news_id', 'rubrics_id']],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => News::className(), 'targetAttribute' => ['news_id' => 'id']],
            [['rubrics_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rubrics::className(), 'targetAttribute' => ['rubrics_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'news_id' => 'News ID',
            'rubrics_id' => 'Rubrics ID',
        ];
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNews() {
        return $this->hasOne(News::className(), ['id' => 'news_id']);
    }

    /**
     * Gets query for [[Rubrics]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRubrics() {
        return $this->hasOne(Rubrics::className(), ['id' => 'rubrics_id']);
    }

    /**
     * Gets query for [[Rubrics]].
     *
     * @return \yii\db\ActiveQuery
     */
    static public function listNewsByRubrics($id) {

        $in = ArrayHelper::merge(ArrayHelper::getColumn(rubrics::listСhildren($id), 'id'), [$id]);
        $result = self::find()->where(['rubrics_id' => $in])->with('news')->groupBy(['news_id'])->all();
        $result = ArrayHelper::getColumn($result, 'news');

        /* Простите, здесь может не очень елегантный foreach :) */
        $return[0];
        $i = 0;
        foreach ($result as $value) {
            $return[$i]['news_id'] = $value->id;
            $return[$i]['title'] = $value->title;
            $return[$i]['body'] = $value->body;

            $i++;
        }

        return $return ?? null;
    }

}
