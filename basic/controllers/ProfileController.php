<?php

namespace app\controllers;

use app\models\SignIn;
use Yii;
use yii\web\Controller;
use app\models\Profile;
use app\models\UploadForm;
use app\models\ContactForm;
use app\models\LoginForm;
use yii\web\UploadedFile;


class ProfileController extends Controller
{
    public function actionIndex()
    {
        $query=UploadForm::find()->select('image')->all();
        $result=UploadForm::find()->select('image')->one();
        return $this->render('index', ['query' => $query, 'result' => $result]);
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $command =Yii::$app->db->createCommand(
                $query = "INSERT INTO contact VALUES('{$model->name}', '{$model->email}', '{$model->message}')"
            );
            $sql_query = $command->execute();
            return $this->render('contact-confirm', ['model' => $model]);
        } else {
            return $this->render('contact', ['model' => $model]);
        }
    }

    public function actionLogin()
    {
        $model = new LoginForm();
        return $this->render('login', ['model' => $model]) ;
    }


    public function actionSignin()
    {
        $model = new SignIn();
        return $this->render('signin', ['model' => $model]) ;
    }

    public function actionUpload()
    {
        $model = new UploadForm();
        if (Yii::$app->request->isPost) {
            $model->images = UploadedFile::getInstance($model, 'image');
            if ($model->upload()) {
                $command = Yii::$app->db->createCommand(
                    "INSERT INTO upload_form(image) VALUES(:image)"
                );
                $command->bindValue(':image', 'upload/' . $model->images->baseName . '.' . $model->images->extension);
                $sql_result = $command->execute();
                // file is uploaded successfully
                return;
            }
        }
        return $this->render('upload', ['model' => $model]);
    }
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionBasic()
    {
        return $this->render('basic');
    }

    public function actionThanks()
    {
        return $this->render('thanks');
    }

    public function actionMany()
    {
        return $this->render('many');
    }

    public function actionCss()
    {
        return $this->render('css');
    }
}


























