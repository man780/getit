<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Area;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Supliar */
/* @var $form yii\widgets\ActiveForm */

$areas = ArrayHelper::map(Area::find()->all(), 'id', 'name');
?>

<div class="supliar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo')->fileInput() ?>

    <?= $form->field($model, 'contract_date')->textInput() ?>

    <?= $form->field($model, 'date_begin')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inn')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
