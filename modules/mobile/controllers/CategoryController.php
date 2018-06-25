<?php

namespace app\modules\mobile\controllers;

use yii\rest\ActiveController;

class CategoryController extends ActiveController
{
    protected function verbs()
    {
        return [
            'index' => ['GET', 'HEAD'],
            'view' => ['GET', 'HEAD'],
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH'],
            'delete' => ['DELETE'],
        ];
    }
    public $modelClass = 'app\models\Category';
}
