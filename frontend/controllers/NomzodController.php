<?php

namespace frontend\controllers;
use yii\web\Controller;
use Yii;
use frontend\models\Nomzodlar;
class NomzodController extends Controller
{
    public function actionIndex()
    {
        $model = new Nomzodlar;
        return $this->render('form', ['model'=>$model]);
    }

}
