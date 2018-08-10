<?php
use yii\helpers\Html;
?>

    <p style="color: #0000fa; font-size: 24px;" >Bạn đã nhập với những thông tin sau:</p>
<form>
    <table class="table table-hover" border="2">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Body</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= Html::encode($model->name)?></td>
                <td><?= Html::encode($model->email)?></td>
                <td><?= Html::encode($model->message)?></td>
            </tr>
        </tbody>
    </table>
</form>
<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Body</label>: <pre><?= Html::encode($model->message) ?></pre></li>
</ul>
<p style="color: #0000fa; font-size: 24px;" >
    <?php echo "Tôi sẽ liên hệ với bạn trong thời gian sớm nhất. !!!"; ?>
</p>