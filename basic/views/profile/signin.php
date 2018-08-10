<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 31/07/2018
 * Time: 16:30
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Sign In';
?>
<div class="profile-signin">
    <div class="row">
        <?php $form = ActiveForm::begin(['id' => 'sign-in-form']) ?>
        <div class="row">

            <div class="col-md-3">
                <?= $form->field($model, 'name')->textInput(['placeholder' => 'Please enter your name'])->label('Name') ?>
            </div>
            <div class="col-md-3">
                <?= $form->field($model, 'username')->input('username', ['placeholder' => 'Username']) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'email')->input('email', ['placeholder' => 'email@example.com']) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'address')->input('address', ['placeholder' => 'Address']) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'tell')->input('tell', ['placeholder' => 'Telephone Number']) ?>
            </div>
            <div class="col-md-3">
            <?= $form->field($model, 'sex')->dropDownList([
                0 => 'Unknown',
                1 => 'Male',
                2 => 'Female',
                ])?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'date')->input('date', ['placeholder' => 'Date of birth']) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <?= $form->field($model, 'password')->passwordInput() ?>
            </div>
            <div class="col-md-3">
                <br/>
                <h6 style="color: #0000fa">Use 8 or more characters with a mix of letters, numbers & symbols</h6>
            </div>
        </div>
        <div>
            <input class="form-check-input" type="checkbox" value=""/>
            <label>
                Agree to terms and conditions.
                You must agree before submitting.
            </label>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Sign in', ['class' => 'btn btn-primary', 'name' => 'sign in-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<!--</div>->textInput(['placeholder' => 'Username']-->


