<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $logo
 * @property int $phone
 * @property int $area
 *
 * @property ContractCs[] $contractCs
 * @property Area $area0
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'area'], 'required'],
            [['area'], 'integer'],
            [['logo'], 'file', 'skipOnEmpty' => true,
                'extensions' => ['jpg', 'jpeg', 'png', 'gif']
            ],
            [['phone', 'name', 'address'], 'string', 'max' => 255],
            [['area'], 'exist', 'skipOnError' => true, 'targetClass' => Area::className(), 'targetAttribute' => ['area' => 'id']],
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
            'address' => 'Address',
            'logo' => 'Logo',
            'phone' => 'Phone',
            'area' => 'Area',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContractCs()
    {
        return $this->hasMany(ContractCs::className(), ['customer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAreaName()
    {
        return $this->hasOne(Area::className(), ['id' => 'area']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['customer_id' => 'id']);
    }
}
