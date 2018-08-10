<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hoiviens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoivien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hoivien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'maHV',
            'tenHV',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
