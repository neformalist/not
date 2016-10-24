<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MetaExample */

$this->title = 'Update Meta Example: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Meta Examples', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="meta-example-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
