<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property int $amount
 * @property int $cost
 * @property int $category_id
 * @property int $supliar_id
 * @property int $created_time
 * @property int $created_user
 *
 * @property ContractCs[] $contractCs
 * @property Category $category
 * @property Supliar $supliar
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'amount', 'cost', 'category_id', 'supliar_id'], 'required'],
            [['amount', 'cost', 'category_id', 'supliar_id'], 'integer'],
            [['name', 'description'], 'string', 'max' => 255],
            [['image'], 'file', 'skipOnEmpty' => true,
                'extensions' => ['jpg', 'jpeg', 'png', 'gif']
            ],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'image' => Yii::t('app', 'Image'),
            'amount' => Yii::t('app', 'Amount'),
            'cost' => Yii::t('app', 'Cost'),
            'category_id' => Yii::t('app', 'Category ID'),
            'supliar_id' => Yii::t('app', 'Supliar ID'),
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($insert) {
                $this->created_user = 1;//Yii::$app->user->id;
                $this->created_time = date('Y-m-d H:i:s');
                //$this->supliar_id = 1;

                Yii::$app->session->setFlash('success', 'Запись добавлена!');
            } else {
                Yii::$app->session->setFlash('success', 'Запись обновлена!');
            }
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContractCs()
    {
        return $this->hasMany(ContractCs::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupliar()
    {
        return $this->hasOne(Supliar::className(), ['id' => 'supliar_id']);
    }
}
