<?php

use yii\db\Migration;

/**
 * Handles the creation of table `customer`.
 * Has foreign keys to the tables:
 *
 * - `area`
 */
class m180301_174938_create_customer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('customer', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'photo' => $this->string()->notNull(),
            'phone' => $this->integer(),
            'area' => $this->integer()->notNull(),
        ]);

        // creates index for column `area`
        $this->createIndex(
            'idx-customer-area',
            'customer',
            'area'
        );

        // add foreign key for table `area`
        $this->addForeignKey(
            'fk-customer-area',
            'customer',
            'area',
            'area',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `area`
        $this->dropForeignKey(
            'fk-customer-area',
            'customer'
        );

        // drops index for column `area`
        $this->dropIndex(
            'idx-customer-area',
            'customer'
        );

        $this->dropTable('customer');
    }
}
