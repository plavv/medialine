<?php

use yii\db\Migration;

/**
 * Class m210208_180442_insert_news_table
 */
class m210208_180442_insert_news_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {

        $this->insert('news', [
            'title' => 'Открытие новой детской площадки.',
            'body' => 'По адресу ул. Садовая 2 открылась новая детская площадка для детей 3-7 лет. Добро пожаловать!'
        ]);

        $this->insert('news', [
            'title' => 'Салют в честь Дня города.',
            'body' => 'На главной площади города в субботу вечером состоится празничный салют в честь Дня нашего города.'
        ]);

        $this->insert('news', [
            'title' => 'Спорт в нашем городе.',
            'body' => 'В следующее воскресенье состоит марафон в честь Дня города, в парке Победы, в 10:00. Приглашаются все желающие.'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {

        $this->delete('news', ['id' => 1]);
        $this->delete('news', ['id' => 2]);
        $this->delete('news', ['id' => 3]);
    }

}
