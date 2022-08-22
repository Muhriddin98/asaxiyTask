<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Nomzodlar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nomzodlar-form col-4 m-auto">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true, 'readonly'=>true]) ?>

    <?= $form->field($model, 'FamilyName')->textInput(['maxlength' => true, 'readonly'=>true]) ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true, 'readonly'=>true]) ?>

    <?= $form->field($model, 'CountryOfOrigin')->textInput(['maxlength' => true, 'readonly'=>true]) ?>

    <?= $form->field($model, 'Education')->textInput(['maxlength' => true, 'readonly'=>true]) ?>

    <?= $form->field($model, 'EmailAddress')->textInput(['maxlength' => true, 'readonly'=>true]) ?>

    <?= $form->field($model, 'PhoneNumber')->textInput(['maxlength' => true, 'readonly'=>true]) ?>

    <?= $form->field($model, 'Age')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'Status')->dropDownList([
            'Yangi'=>'Yangi',
            'Intervyu belgilangan'=>'Intervyu belgilangan',
            'Qabul qilingan'=>'Qabul qilingan',
            'Qabul qilinmagan'=>'Qabul qilinmagan'
    ]) ?>

    <div class="form-group mt-2">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
