<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

//$this->title = 'Upload file';

?>
<div>
    <?php
    $form1 = ActiveForm::begin([
        'options' => [ 'enctype' => 'multipart/form-data']
    ])
    ?>
    <?=$form1->field($model, 'image')->fileInput() ?>
    <div class="form-group">

        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>