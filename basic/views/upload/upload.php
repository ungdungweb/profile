<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\db\Command;
?>

<div>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    </div>

<!--    --><?php
//        if(isset($_POST['submit']))
//        {
//            Yii::$app->db->createCommand()->insert('images', [
//                    'images' => $form->field($model, 'image'),
//            ])->execute();
//        }
//    ?>
<?php ActiveForm::end() ?>
</div>
