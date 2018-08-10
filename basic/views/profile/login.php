<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 31/07/2018
 * Time: 16:30
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Login';

?>
<div class="profile-login">

    <div class="row">
        <?php $form = ActiveForm::begin(['id' => 'login-form']) ?>

        <?= $form->field($model, 'username', ['inputOptions' => ['placeholder' => 'Username']]) ?>

        <?= $form->field($model, 'password', ['inputOptions' => ['placeholder' => '********']])->passwordInput() ?>

        <td>
            <input type="checkbox" name="remember" class="required" value="1" />
            Duy trì đăng nhập
        </td>
        <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>

        <td><a href="http://localhost/basic/web/sign-in.html"><h2>Đăng ký tài khoản</h2></a></td>

        <?php ActiveForm::end(); ?>
    </div>
</div>

