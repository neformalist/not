<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\MetaExample */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Meta Examples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meta-example-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'example_id',
            'description_ru:ntext',
            'keywords_ru:ntext',
            'description_en:ntext',
            'keywords_en:ntext',
        ],
    ]) ?>

</div>
