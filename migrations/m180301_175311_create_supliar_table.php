<?php

use yii\db\Migration;

/**
 * Handles the creation of table `supliar`.
 */
class m180301_175311_create_supliar_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('supliar', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'logo' => $this->string()->notNull(),
            'contract_date' => $this->integer()->notNull(),
            'date_begin' => $this->integer()->notNull(),
            'phone' => $this->integer(32)->notNull(),
            'address' => $this->string()->notNull(),
            'inn' => $this->integer()->notNull(),
            'coverage_area' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('supliar');
    }
}
