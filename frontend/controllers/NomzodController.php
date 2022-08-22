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
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('success', [
                'id' => $model->id,
            ]);
        } else {
            return $this->render('form', [
                'model' => $model,
            ]);
        }
    }

}
