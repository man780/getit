<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Supliar */

$this->title = 'Create Supliar';
$this->params['breadcrumbs'][] = ['label' => 'Supliars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supliar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
