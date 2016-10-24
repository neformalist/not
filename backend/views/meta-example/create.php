<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MetaExample */

$this->title = 'Create Meta Example';
$this->params['breadcrumbs'][] = ['label' => 'Meta Examples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meta-example-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
