<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ProductFields */

$this->title = 'Create Product Fields';
$this->params['breadcrumbs'][] = ['label' => 'Product Fields', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-fields-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
