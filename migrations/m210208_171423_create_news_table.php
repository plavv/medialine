<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m210208_171423_create_news_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {

        $tableName = Yii::$app->db->tablePrefix . 'news';
        if (Yii::$app->db->getTableSchema($tableName, true)) {
            $this->dropTable('{{%news}}');
        }

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100)->notNull(),
            'body' => $this->text()
                ], $tableOptions);

        $this->addCommentOnTable('news', 'Новости');
        $this->addCommentOnColumn('news', 'id', 'id столбца');
        $this->addCommentOnColumn('news', 'title', 'Заголовок новости');
        $this->addCommentOnColumn('news', 'body', 'Текст');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%news}}');
    }

}
