<?php

use yii\db\Migration;

/**
 * Handles the creation of table `post`.
 */
class m180315_140222_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'content' => $this->string(),
            'image' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('post');
    }
}
