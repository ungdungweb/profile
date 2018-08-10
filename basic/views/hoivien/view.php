<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Hoivien */

$this->title = $model->maHV;
$this->params['breadcrumbs'][] = ['label' => 'Hoiviens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoivien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->maHV], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->maHV], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'maHV',
            'tenHV',
        ],
    ]) ?>

</div>
