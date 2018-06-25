<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contract_cs".
 *
 * @property int $id
 * @property int $customer_id
 * @property int $supliar_id
 * @property int $product_id
 * @property int $amount
 * @property string $time
 * @property int $cost
 * @property int $status
 *
 * @property Product $product
 * @property Customer $customer
 * @property Supliar $supliar
 */
class ContractCs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contract_cs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'supliar_id', 'product_id', 'amount', 'time', 'cost'], 'required'],
            [['customer_id', 'supliar_id', 'product_id', 'amount', 'cost'], 'integer'],
            [['time', 'status'], 'safe'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'id']],
            [['supliar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Supliar::className(), 'targetAttribute' => ['supliar_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'supliar_id' => 'Supliar ID',
            'product_id' => 'Product ID',
            'amount' => 'Amount',
            'time' => 'Time',
            'cost' => 'Cost',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupliar()
    {
        return $this->hasOne(Supliar::className(), ['id' => 'supliar_id']);
    }
}
