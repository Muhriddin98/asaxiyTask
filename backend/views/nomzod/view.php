<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Nomzodlar */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Nomzodlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nomzodlar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Intervyu belgilash', ['eslatma/create', 'id'=>$model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Name',
            'FamilyName',
            'Address',
            'CountryOfOrigin',
            'Education',
            'EmailAddress:email',
            'PhoneNumber',
            'Age',
            'Status',
        ],
    ]) ?>

</div>
