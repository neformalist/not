<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\controllers\ArticleSearchMetaExample */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Meta Examples';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meta-example-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Meta Example', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'example_id',
            'description_ru:ntext',
            'keywords_ru:ntext',
            'description_en:ntext',
            // 'keywords_en:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
