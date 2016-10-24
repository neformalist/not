<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Example */

$this->title = 'Create Example';
$this->params['breadcrumbs'][] = ['label' => 'Examples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="example-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
