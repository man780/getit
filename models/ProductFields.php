<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_fields".
 *
 * @property int $id
 * @property int $category_id
 * @property int $weight
 * @property int $size
 * @property string $color
 *
 * @property Category $category
 */
class ProductFields extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_fields';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'color'], 'required'],
            [['category_id', 'weight', 'size'], 'integer'],
            [['color'], 'string', 'max' => 30],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'weight' => 'Weight',
            'size' => 'Size',
            'color' => 'Color',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
