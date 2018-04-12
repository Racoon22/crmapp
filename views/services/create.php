<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\services\ServicesRecord */

$this->title = 'Create Services Record';
$this->params['breadcrumbs'][] = ['label' => 'Services Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
