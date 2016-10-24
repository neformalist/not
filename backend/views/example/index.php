<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\controllers\ExampleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Examples';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="example-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Example', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'title_ru',
            'title_en',
            'updated_at',
            // 'created_at',
            // 'visible',
            // 'description_ru:ntext',
            // 'description_en:ntext',
            // 'hits',
            // 'url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
