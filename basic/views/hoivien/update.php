<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hoivien */

$this->title = 'Update Hoivien: ' . $model->maHV;
$this->params['breadcrumbs'][] = ['label' => 'Hoiviens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->maHV, 'url' => ['view', 'id' => $model->maHV]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hoivien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
