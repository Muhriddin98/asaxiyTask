<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NomzodlarSerch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nomzodlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nomzodlar-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'Name',
            'FamilyName',
            'Address',
            'CountryOfOrigin',
            //'Education',
            //'EmailAddress:email',
            //'PhoneNumber',
            //'Age',
            'Status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
