<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order_items".
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property int $supliar_id
 * @property string $name
 * @property double $price
 * @property int $quantity_item
 * @property double $sum_item
 *
 * @property Order $order
 * @property Product $product
 * @property Supliar $supliar
 */
class OrderItems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'supliar_id', 'quantity_item'], 'integer'],
            [['name', 'price', 'quantity_item', 'sum_item'], 'required'],
            [['price', 'sum_item'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['order_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['supliar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Supliar::className(), 'targetAttribute' => ['supliar_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'order_id' => Yii::t('app', 'Order ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'supliar_id' => Yii::t('app', 'Supliar ID'),
            'name' => Yii::t('app', 'Name'),
            'price' => Yii::t('app', 'Price'),
            'quantity_item' => Yii::t('app', 'Quantity Item'),
            'sum_item' => Yii::t('app', 'Sum Item'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
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
    public function getSupliar()
    {
        return $this->hasOne(Supliar::className(), ['id' => 'supliar_id']);
    }
}
