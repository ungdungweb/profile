<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 31/07/2018
 * Time: 16:08
 */

namespace app\models;

use yii\base\model;



class ContactForm extends Model
{
    public $name;
    public $email;
    public $message;

    public function rules()
    {
        return [

            [['name', 'email', 'message'], 'required'],
            ['email', 'email'],
        ];
    }
}