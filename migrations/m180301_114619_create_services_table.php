<?php

use yii\db\Migration;

/**
 * Handles the creation of table `services`.
 */
class m180301_114619_create_services_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('services', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'hourly_rate' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('services');
    }
}
