<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\NomzodlarSerch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nomzodlar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'FamilyName') ?>

    <?= $form->field($model, 'Address') ?>

    <?= $form->field($model, 'CountryOfOrigin') ?>

    <?php // echo $form->field($model, 'Education') ?>

    <?php // echo $form->field($model, 'EmailAddress') ?>

    <?php // echo $form->field($model, 'PhoneNumber') ?>

    <?php // echo $form->field($model, 'Age') ?>

    <?php // echo $form->field($model, 'Hired') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
