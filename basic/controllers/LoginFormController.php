<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 31/07/2018
 * Time: 16:18
 */

//namespace app\controllers;

use yii\web\Controller;

class LoginFormController extends Controller
{
    public function actionLoginForm()
    {
        $model = new \app\models\LoginForm();
        return $this->render('index', ['model' => $model]) ;
    }
}