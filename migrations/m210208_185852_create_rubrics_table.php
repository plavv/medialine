<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rubrics}}`.
 */
class m210208_185852_create_rubrics_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {

        $tableName = Yii::$app->db->tablePrefix . 'rubrics';
        if (Yii::$app->db->getTableSchema($tableName, true)) {
            $this->dropTable('{{%rubrics}}');
        }

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
// http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%rubrics}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(),
            'name' => $this->string(100)->notNull(),
                ], $tableOptions);

        $this->createIndex('idx_parent_id', '{{%rubrics}}', 'parent_id');

        $this->addCommentOnTable('rubrics', 'Рубрики');
        $this->addCommentOnColumn('rubrics', 'id', 'id столбца');
        $this->addCommentOnColumn('rubrics', 'name', 'рубрика');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%rubrics}}');
    }

}
