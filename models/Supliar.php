<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supliar".
 *
 * @property int $id
 * @property string $name
 * @property string $logo
 * @property int $contract_date
 * @property int $date_begin
 * @property int $phone
 * @property string $address
 * @property int $inn
 *
 * @property ContractCs[] $contractCs
 */
class Supliar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supliar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'contract_date', 'date_begin', 'phone', 'address', 'inn'], 'required'],
            [['inn'], 'integer'],
            [['logo'], 'file', 'skipOnEmpty' => true,
                'extensions' => ['jpg', 'jpeg', 'png', 'gif']
            ],
            [['name', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'logo' => 'Logo',
            'contract_date' => 'Contract Date',
            'date_begin' => 'Date Begin',
            'phone' => 'Phone',
            'address' => 'Address',
            'inn' => 'Inn',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContractCs()
    {
        return $this->hasMany(ContractCs::className(), ['supliar_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['supliar_id' => 'id']);
    }
}
