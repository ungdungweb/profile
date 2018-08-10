<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21/07/2018
 * Time: 17:31
 */

namespace app\models;

use yii\base\Model;
//use yii\web\UploadedFile;
use yii\db\ActiveRecord;

class Profile extends ActiveRecord
{
    public $images;

    public function rules()
    {
        return [
            [['images'],'file','skipOnEmpty' => false, 'extensions' => 'png, jpg, gif'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->images->saveAs('upload/' . $this->images->baseName . '.' . $this->images->extension);
            return true;
        } else {
            return false;
        }
    }
}


