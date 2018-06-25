<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 * Has foreign keys to the tables:
 *
 * - `category`
 */
class m180301_175723_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'photo' => $this->string()->notNull(),
            'amount' => $this->integer()->notNull(),
            'cost' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `category_id`
        $this->createIndex(
            'idx-product-category_id',
            'product',
            'category_id'
        );

        // add foreign key for table `category`
        $this->addForeignKey(
            'fk-product-category_id',
            'product',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `category`
        $this->dropForeignKey(
            'fk-product-category_id',
            'product'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            'idx-product-category_id',
            'product'
        );

        $this->dropTable('product');
    }
}
