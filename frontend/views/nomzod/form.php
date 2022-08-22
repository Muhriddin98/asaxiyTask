<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Nomzodlar */
/* @var $form ActiveForm */
?>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .nomzod-form{
        width: 700px;
        margin: auto;
        margin-top: 30px;
        background: lavender;
        padding-bottom: 25px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .nomzod-form h2{
        text-align: center;
        margin: 30px 0;
    }
    .box{
        display: flex;
        width: 600px;
        height: auto;
        margin: 30px 0;
        justify-content: space-between;
        text-align: center;
    }
</style>
<div class="nomzod-form form-control">
    <h2>Ariza to'ldirish formasi</h2>
    <?php $form = ActiveForm::begin(); ?>
    <div class="box">
        <?= $form->field($model, 'Name')->input('text',[
                'minlength'=>3
        ]) ?>
        <?= $form->field($model, 'FamilyName')->input('text',[
                'minlength'=>5
        ]) ?>
    </div>
    <div class="box">
        <?= $form->field($model, 'Age')->input('number', [
                'min'=>18,
                'maxlength'=>2
        ]) ?>
        <?= $form->field($model, 'Education')->dropDownList([
                ''=>'',
                'Oliy'=>'Oliy',
                'Tugallanmagan oliy'=>'Tugallanmagan oliy',
                'O\'rta maxsus'=>'O\'rta maxsus',
                'O\'rta'=>'O\'rta',
        ]) ?>
    </div>
    <div class="box">
        <?= $form->field($model, 'Address')->input('text',[
                'minlength'=>10
        ]) ?>
        <?= $form->field($model, 'CountryOfOrigin')->input('text') ?>
    </div>
    <div class="box">
        <?= $form->field($model, 'EmailAddress')->input('email',[
                'placeholder'=>'example@gmail.com'
        ]) ?>
        <?= $form->field($model, 'PhoneNumber')->input('text',[
            'minlength'=>13,
            'maxlength'=>13,
            'id'=>'phone',
            'placeholder'=>'+998XXXXXXXXX'
        ]) ?>
    </div>
    <div class="form-group d-flex justify-content-center">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
<script type="text/javascript">
    let phone = document.querySelector('#phone');
    phone.addEventListener('input', function (){
        if(phone.value.length === 4 && phone.value !== '+998'){
            alert('Telefon raqam +998 dan boshlanishi kerak!!!');
            phone.value = '+998';
        }
    })
</script>
