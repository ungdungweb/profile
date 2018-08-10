<?php
use yii\helpers\Html;

?>
    <h1>Images</h1>
    <ul>
        <li>

        <?php foreach ($anh as $image) ?>
                <?= Html::encode("{$image->image} ") ?>:
            </li>
        <?php endforeach; ?>
    </ul>

