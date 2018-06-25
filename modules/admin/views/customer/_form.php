<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Area;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Customer */
/* @var $form yii\widgets\ActiveForm */
$areas = ArrayHelper::map(Area::find()->all(), 'id', 'name');
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo')->fileInput() ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?//= $form->field($model, 'area')->textInput() ?>
    <?= $form->field($model, 'area')->dropDownList($areas/*, ['prompt' =>'Без категории...',]*/); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
