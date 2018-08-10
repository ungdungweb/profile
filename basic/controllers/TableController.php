<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\FormTable;

class TableController extends Controller
{
    public function actionTable()
    {
        $model = new FormTable();

        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            return $this->render('table-confirm', ['model' => $model]);
        }
        else
        {
            return $this->render('table', ['model' => $model]);
        }
    }
}












