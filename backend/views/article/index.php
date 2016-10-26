<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\controllers\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'category_id',
                'filter' => common\models\Category::find()->select(['name', 'id'])->indexBy('id')->column(),
                'value' => function (common\models\Article $article){
                                return $article->category->name;
                            }
            ],
            'title_ru',
            'updated_at',
            'created_at',
             [
                 'attribute' => 'visible',
                 'filter' => [0 => "No", 1 => 'Yes'],
                 'format' => 'boolean'
             ],
             'description_ru:ntext',
             'author',
             'hits',
             'url:url',
             [
            'label' => 'Image',
            'format' => 'raw',
            'value' => function($data){
                
                return ($data->image)? Html::img($data->image,[
                    'alt'=>$data->title_ru,
                    'style' => 'width:150px;'
                    ]) : NULL;
                },
            ],
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
