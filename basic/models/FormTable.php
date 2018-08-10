<?php

namespace app\models;

use Yii;
use yii\base\Model;

class FormTable extends Model
{
    public $name;
    public $email;
    public $address, $tell;

    public function rule()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
            ['address', 'string', 'max' => 255],
            ['tell', 'string', 'min' => 10, 'max' => 11],
        ];
    }
}