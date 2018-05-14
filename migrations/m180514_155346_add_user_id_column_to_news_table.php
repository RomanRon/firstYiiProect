<?php

use yii\db\Migration;

/**
 * Handles adding user_id to table `news`.
 */
class m180514_155346_add_user_id_column_to_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
   public function safeUp()
    {
        $this->addColumn('news', 'user_id', $this->integer());
        $this->createIndex('idx_news-user_id', 'news', 'user_id');
        $this->addForeignKey('fk-news-user', 'news', 'user_id', 'user', 'id');
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-news-user', 'news');
        $this->dropIndex('idx_news-user_id', 'news');
        $this->dropColumn('news', 'user_id');
    }
}
