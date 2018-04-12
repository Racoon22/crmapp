<?php

use yii\db\Migration;

/**
 * Class m180226_144442_init_customer_table
 */
class m180226_144442_init_customer_table extends Migration
{
    public function up()
    {
        $this->createTable(
            'customer',
            [
                'id' => 'pk',
                'name' => 'string',
                'birth_date' => 'date',
                'notes' => 'text',
            ],
            'ENGINE=InnoDB'
        );

    }

    public function down()
    {
        $this->dropTable('customer');
    }
}
