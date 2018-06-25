<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_fields`.
 * Has foreign keys to the tables:
 *
 * - `category`
 */
class m180301_180936_create_product_fields_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('product_fields', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'weight' => $this->integer(),
            'size' => $this->integer(),
            'color' => $this->string(30)->notNull(),
        ]);

        // creates index for column `category_id`
        $this->createIndex(
            'idx-product_fields-category_id',
            'product_fields',
            'category_id'
        );

        // add foreign key for table `category`
        $this->addForeignKey(
            'fk-product_fields-category_id',
            'product_fields',
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
            'fk-product_fields-category_id',
            'product_fields'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            'idx-product_fields-category_id',
            'product_fields'
        );

        $this->dropTable('product_fields');
    }
}
