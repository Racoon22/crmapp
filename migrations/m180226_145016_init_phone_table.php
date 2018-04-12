<?php

use yii\db\Migration;

/**
 * Class m180226_145016_init_phone_table
 */
class m180226_145016_init_phone_table extends Migration
{
    public function up()
    {
        $this->createTable(
            'phone',
            [
                'id' => 'pk',
                'customer_id' => 'int',
                'number' => 'string',
            ]
        );
        $this->addForeignKey('customer_phone_numbers', 'phone', 'customer_id', 'customer', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('customer_phone_numbers', 'phone');
        $this->dropTable('phone');
    }
}
