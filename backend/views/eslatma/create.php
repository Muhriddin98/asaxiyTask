<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Eslatmalar */

$this->title = 'Create Eslatmalar';
$this->params['breadcrumbs'][] = ['label' => 'Eslatmalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eslatmalar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'id'=>$id
    ]) ?>

</div>
