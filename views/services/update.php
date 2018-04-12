<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\services\ServicesRecord */

$this->title = 'Update Services Record: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Services Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="services-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
