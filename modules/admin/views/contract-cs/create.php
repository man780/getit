<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\contractCs */

$this->title = 'Create Contract Cs';
$this->params['breadcrumbs'][] = ['label' => 'Contract Cs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-cs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
