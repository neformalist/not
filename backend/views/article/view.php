<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-view">

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
            [
                'attribute' => 'category_id',
                'value' => \yii\helpers\ArrayHelper::getValue($model, 'category.name')        
            ],
            'title',
            'updated_at',
            'created_at',
            'visible:boolean',
            'description:ntext',
            'author',
            'hits',
            'url:url',
        ],
    ]) ?>
    
   <?=  Html::a('Add', ['text/create', 'article_id'=> $model->id], ['class' => 'btn btn-primary']);?>
   <?php ?>
    <?= GridView::widget([
        'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getTexts()]),
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute' =>'text_ru',
              'value' => function ($data){
                  return \yii\helpers\BaseStringHelper::truncate($data->text_ru, 150) ;
              }
            ],
            'number_page',        
            ['class' => 'yii\grid\ActionColumn',
             'controller' => 'text',
                'buttons'=>[
                    'update'=>function($url, $model, $key) use ($article_id){
                              return  Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url.'&article_id='.$article_id);
                            },
                                       
                ]
            ],
            
        ],
    ]); ?>
    <?=  Html::a('Add', ['meta/create', 'article_id'=> $model->id], ['class' => 'btn btn-primary']);?>
     <?= GridView::widget([
        'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getMetas()]),
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'description_ru',
            'keywords_ru',

            ['class' => 'yii\grid\ActionColumn',
             'controller' => 'meta' 
            ],
            
        ],
    ]); ?>
    
    

</div>
