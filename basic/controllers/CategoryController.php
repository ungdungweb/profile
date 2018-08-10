<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23/07/2018
 * Time: 08:30
 */

namespace app\controllers;

use app\models\Category;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $listCate = Category::find()->where(['delete' => 0])->all();
        return $this->render('index', ['list' => $listCate]);
    }
}