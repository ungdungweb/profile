<div >
    <?php
    $form1 = ActiveForm::begin([
        'options' => [ 'enctype' => 'multipart/form-data']
    ]);
    ?>

    <?= $form1->field($model, 'image')->fileInput() ?>
    <?php if ($model->image): ?>
        <div class="form-group">
            <?= Html::img(['/file', 'id' => $model->image]) ?>
        </div>
    <?php endif; ?>


    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div><?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 25/07/2018
 * Time: 08:52
 */