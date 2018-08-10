<?php

use yii\helpers\Html;

$this->title = 'My profile';
?>
<div class="profile-index">

    <div class="jumbotron">
<!--        <p class="lead"><h1>Xin chào tất cả mọi người.!!!</h1></p>-->
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Ảnh</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($query as $result)
                {
                ?>
                <tr>
                    <td>
                        <?=Html::img('@web/'.$result->image); ?>
                    </td>
                <?php
                }
                ?>
                </tr>
        </tbody>
    </table>



</div>


