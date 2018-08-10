<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Contact';

?>

<div class="profile-contact">
    <div class="row">
        <div class="row">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
            <div class="row">
                <div class="col-md-3">
                    <?= $form->field($model, 'name')->textInput(['placeholder' => 'Please enter your name']) ?>
                </div>
                <div class="col-md-9"></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <?= $form->field($model, 'email')->input('email', ['placeholder' => 'Enter your email']) ?>
                </div>
                <div class="col-md-9"></div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <?= $form->field($model, 'message')->textarea(['rows' => 4]) ?>
                </div>
                <div class="col-md-9"></div>
            </div>
            <div class="form-group">
                <?= Html::submitButton('submit', ['class' => 'btn btn-primary', 'name' => 'submit-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
