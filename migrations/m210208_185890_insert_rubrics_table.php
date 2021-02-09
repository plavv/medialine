<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rubrics}}`.
 */
class m210208_185890_insert_rubrics_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {

        $this->insert('rubrics', [
            'name' => 'Общество'
        ]);
        $this->insert('rubrics', [
            'parent_id' => 1,
            'name' => 'городская жизнь'
        ]);
        $this->insert('rubrics', [
            'parent_id' => 1,
            'name' => 'выборы'
        ]);
        $this->insert('rubrics', [
            'name' => 'День города'
        ]);
        $this->insert('rubrics', [
            'parent_id' => 4,
            'name' => 'салюты'
        ]);
        $this->insert('rubrics', [
            'parent_id' => 4,
            'name' => 'детская площадка'
        ]);
        $this->insert('rubrics', [
            'name' => '0-3 года'
        ]);
        $this->insert('rubrics', [
            'name' => '3-7 года'
        ]);
        $this->insert('rubrics', [
            'name' => 'Спорт'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {

        $this->delete('rubrics', ['id' => 1]);
        $this->delete('rubrics', ['id' => 2]);
        $this->delete('rubrics', ['id' => 3]);
        $this->delete('rubrics', ['id' => 4]);
        $this->delete('rubrics', ['id' => 5]);
        $this->delete('rubrics', ['id' => 6]);
        $this->delete('rubrics', ['id' => 7]);
        $this->delete('rubrics', ['id' => 8]);
    }

}
