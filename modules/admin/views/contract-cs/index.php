<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contract Cs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-cs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Contract Cs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'customer_id',
            'supliar_id',
            'product_id',
            'amount',
            //'time',
            //'cost',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
