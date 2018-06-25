<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'address',
            [
                'attribute' => 'logo',
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/'. $data['logo'],
                        ['width' => '70px']);
                },
                'format' => 'html',
            ],
            'phone',
            //'area',
            [
                'attribute' => 'area',
                'value' => function ($data) {
                    return $data->areaName->name;
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
