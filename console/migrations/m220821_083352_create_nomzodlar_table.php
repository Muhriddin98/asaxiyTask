<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%nomzodlar}}`.
 */
class m220821_083352_create_nomzodlar_table extends Migration
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
        $this->createTable('nomzodlar', [
            'id' => $this->primaryKey(),
            'Name'=>$this->string(50)->notNull(),
            'FamilyName'=>$this->string(50)->notNull(),
            'Address'=>$this->string(100)->notNull(),
            'CountryOfOrigin'=>$this->string(20)->notNull(),
            'EmailAddress'=>$this->string(50)->notNull()->unique(),
            'PhoneNumber'=>$this->string(20)->notNull()->unique(),
            'Age'=>$this->integer()->notNull(),
            'Hired'=>$this->boolean()->notNull()->defaultValue(false),
            'Status'=>$this->string(20)->notNull()->defaultValue('Yangi'),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('nomzodlar');
    }
}
