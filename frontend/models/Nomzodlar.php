<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "nomzodlar".
 *
 * @property int $id
 * @property string $Name
 * @property string $FamilyName
 * @property string $Address
 * @property string $CountryOfOrigin
 * @property string $Education
 * @property string $EmailAddress
 * @property string $PhoneNumber
 * @property int $Age
 * @property string $Status
 */
class Nomzodlar extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nomzodlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'FamilyName', 'Address', 'CountryOfOrigin', 'Education', 'EmailAddress', 'PhoneNumber', 'Age'], 'required'],
            [['Age'], 'integer'],
            [['Name', 'FamilyName', 'EmailAddress'], 'string', 'max' => 50],
            [['Address'], 'string', 'max' => 100],
            [['CountryOfOrigin', 'PhoneNumber', 'Education', 'Status'], 'string', 'max' => 20],
            [['EmailAddress'], 'unique'],
            [['PhoneNumber'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Ismi',
            'FamilyName' => 'Familiyasi',
            'Address' => 'Manzili',
            'CountryOfOrigin' => 'Millati',
            'Education' => 'Ma\'lumoti',
            'EmailAddress' => 'Elektron pochta',
            'PhoneNumber' => 'Telefon raqami',
            'Age' => 'Yoshi',
            'Status' => 'Status',
        ];
    }
}
