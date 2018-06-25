<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contract_cs`.
 * Has foreign keys to the tables:
 *
 * - `customer`
 * - `supliar`
 * - `product`
 */
class m180301_180803_create_contract_cs_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contract_cs', [
            'id' => $this->primaryKey(),
            'customer_id' => $this->integer()->notNull(),
            'supliar_id' => $this->integer()->notNull(),
            'product_id' => $this->integer()->notNull(),
            'amount' => $this->integer()->notNull(),
            'time' => $this->datetime()->notNull(),
            'cost' => $this->integer()->notNull(),
        ]);

        // creates index for column `customer_id`
        $this->createIndex(
            'idx-contract_cs-customer_id',
            'contract_cs',
            'customer_id'
        );

        // add foreign key for table `customer`
        $this->addForeignKey(
            'fk-contract_cs-customer_id',
            'contract_cs',
            'customer_id',
            'customer',
            'id',
            'CASCADE'
        );

        // creates index for column `supliar_id`
        $this->createIndex(
            'idx-contract_cs-supliar_id',
            'contract_cs',
            'supliar_id'
        );

        // add foreign key for table `supliar`
        $this->addForeignKey(
            'fk-contract_cs-supliar_id',
            'contract_cs',
            'supliar_id',
            'supliar',
            'id',
            'CASCADE'
        );

        // creates index for column `product_id`
        $this->createIndex(
            'idx-contract_cs-product_id',
            'contract_cs',
            'product_id'
        );

        // add foreign key for table `product`
        $this->addForeignKey(
            'fk-contract_cs-product_id',
            'contract_cs',
            'product_id',
            'product',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `customer`
        $this->dropForeignKey(
            'fk-contract_cs-customer_id',
            'contract_cs'
        );

        // drops index for column `customer_id`
        $this->dropIndex(
            'idx-contract_cs-customer_id',
            'contract_cs'
        );

        // drops foreign key for table `supliar`
        $this->dropForeignKey(
            'fk-contract_cs-supliar_id',
            'contract_cs'
        );

        // drops index for column `supliar_id`
        $this->dropIndex(
            'idx-contract_cs-supliar_id',
            'contract_cs'
        );

        // drops foreign key for table `product`
        $this->dropForeignKey(
            'fk-contract_cs-product_id',
            'contract_cs'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            'idx-contract_cs-product_id',
            'contract_cs'
        );

        $this->dropTable('contract_cs');
    }
}
