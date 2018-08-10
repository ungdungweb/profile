<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 31/07/2018
 * Time: 16:30
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
 ?>
<div>
    <?php
        $form = ActiveForm::begin(['id' => 'login-form']);
    ?>
    <?php $form->field($model, 'username') ?>
    <?php $form->field($model, 'password') ?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
