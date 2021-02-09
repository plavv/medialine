<?php

use yii\db\Migration;

/**
 * Class m210209_055259_insert_news_rubrics_table
 */
class m210209_055259_insert_news_rubrics_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->insert('news_rubrics', [
            'news_id' => 1,
            'rubrics_id' => 2,
        ]);
        $this->insert('news_rubrics', [
            'news_id' => 1,
            'rubrics_id' => 6,
        ]);
        $this->insert('news_rubrics', [
            'news_id' => 1,
            'rubrics_id' => 7,
        ]);
        $this->insert('news_rubrics', [
            'news_id' => 1,
            'rubrics_id' => 8,
        ]);
        $this->insert('news_rubrics', [
            'news_id' => 2,
            'rubrics_id' => 5,
        ]);
        $this->insert('news_rubrics', [
            'news_id' => 2,
            'rubrics_id' => 4,
        ]);
        $this->insert('news_rubrics', [
            'news_id' => 3,
            'rubrics_id' => 9,
        ]);
        $this->insert('news_rubrics', [
            'news_id' => 3,
            'rubrics_id' => 4,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {

        $this->delete('news_rubrics', ['id' => 1]);
        $this->delete('news_rubrics', ['id' => 2]);
        $this->delete('news_rubrics', ['id' => 3]);
        $this->delete('news_rubrics', ['id' => 4]);
        $this->delete('news_rubrics', ['id' => 5]);
        $this->delete('news_rubrics', ['id' => 6]);
        $this->delete('news_rubrics', ['id' => 7]);
        $this->delete('news_rubrics', ['id' => 8]);
    }

}
