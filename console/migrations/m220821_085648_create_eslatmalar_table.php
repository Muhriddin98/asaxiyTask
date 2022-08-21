<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%eslatmalar}}`.
 */
class m220821_085648_create_eslatmalar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('eslatmalar', [
            'id' => $this->primaryKey(),
            'nomzod_id' => $this->integer(),
            'intervyu_vaqti' => $this->dateTime(),
            'eslatma' => $this->string(100)->notNull(),
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('eslatmalar');
    }
}
