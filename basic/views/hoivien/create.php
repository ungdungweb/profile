<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Hoivien */

$this->title = 'Create Hoivien';
$this->params['breadcrumbs'][] = ['label' => 'Hoiviens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoivien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
