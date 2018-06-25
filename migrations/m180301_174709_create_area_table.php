<?php

use yii\db\Migration;

/**
 * Handles the creation of table `area`.
 */
class m180301_174709_create_area_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('area', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('area');
    }
}
