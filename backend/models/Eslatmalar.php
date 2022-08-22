<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "eslatmalar".
 *
 * @property int $id
 * @property int|null $nomzod_id
 * @property string|null $intervyu_vaqti
 * @property string $eslatma
 */
class Eslatmalar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eslatmalar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomzod_id'], 'integer'],
            [['intervyu_vaqti'], 'safe'],
            [['eslatma','nomzod_id','intervyu_vaqti'], 'required'],
            [['eslatma'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomzod_id' => 'Nomzod ID',
            'intervyu_vaqti' => 'Intervyu Vaqti',
            'eslatma' => 'Eslatma',
        ];
    }
}
