<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 01/08/2018
 * Time: 08:43
 */

namespace app\models;

use yii\base\model;

class SignIn extends Model

{
    public $username, $name;
    public $password, $date, $email, $address, $tell, $sex;

    public function rules()
    {
        return [
            [['name', 'username', 'password', 'date', 'email', 'address', 'tell', 'sex'], 'required'],
            ['email', 'email'],

        ];
    }
}
