<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Eslatmalar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eslatmalar-form col-4 m-auto">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'nomzod_id')->input('text', ['value'=>$id, 'readonly'=>true]) ?>

    <?= $form->field($model, 'intervyu_vaqti')->input('datetime-local') ?>

    <?= $form->field($model, 'eslatma')->textInput(['maxlength' => true]) ?>

    <div class="form-group mt-2">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
