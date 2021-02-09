<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news_rubrics}}`.
 */
class m210208_192955_create_news_rubrics_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {

        $tableName = Yii::$app->db->tablePrefix . 'news_rubrics';
        if (Yii::$app->db->getTableSchema($tableName, true)) {
            $this->dropTable('{{%news_rubrics}}');
        }

        $this->createTable('{{%news_rubrics}}', [
            'news_id' => $this->integer()->notNull(),
            'rubrics_id' => $this->integer()->notNull(),
        ]);

        $this->addPrimaryKey('news-rubrics_pk', 'news_rubrics', ['news_id', 'rubrics_id']);


        $this->addForeignKey(
                'fk-news_rubrics-news_id',
                'news_rubrics',
                'news_id',
                'news',
                'id',
                'CASCADE'
        );

        $this->addForeignKey(
                'fk-news_rubrics-rubrics_id',
                'news_rubrics',
                'rubrics_id',
                'rubrics',
                'id',
                'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {

        $this->dropForeignKey(
                'fk-news_rubrics-rubrics_id',
                'news_rubrics'
        );
        $this->dropForeignKey(
                'fk-news_rubrics-news_id',
                'news_rubrics'
        );
        $this->dropTable('{{%news_rubrics}}');
    }

}
