<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 25/07/2018
 * Time: 16:24
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\UpFile;

class UpFileController extends Controller
{
    public function actionIndex()
    {
        $query = UpFile::find();
        $anh = $query->orderBy('image')->all();

        return $this->render('index', [
            'anh' => $anh,
        ]);
    }
}