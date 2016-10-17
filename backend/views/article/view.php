<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\Article */
/* @var $options_delete array */
/* @var $searchModelText backend\controllers\TextSearch */
/* @var $dataProviderText yii\data\ActiveDataProvider */

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
  
    <?= GridView::widget([
        'dataProvider' => $dataProviderText,
        'filterModel' => $searchModelText,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute' =>'text_ru',
              'value' => function ($data){
                  return \yii\helpers\BaseStringHelper::truncate($data->text_ru, 130);
              }
            ],
            'number_page',
            'visible:boolean',        
            ['class' => 'yii\grid\ActionColumn',
             'controller' => 'text',
                'buttons'=>[
                    'update'=>function($url, $model, $key) use ($article_id){
                              return  Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url.'&article_id='.$article_id);
                            },
                    'delete'=>function($url, $model, $key) use ($article_id, $options_delete){
                              return  Html::a('<span class="glyphicon glyphicon-trash"></span>', $url.'&article_id='.$article_id, $options_delete);
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

            [
                'attribute' =>'description_ru',
                'value' => function ($data){
                  return \yii\helpers\BaseStringHelper::truncate($data->description_ru, 130);
                }
            ],
            
            'keywords_ru',

            ['class' => 'yii\grid\ActionColumn',
             'controller' => 'meta',
                'buttons'=>[
                    'update'=>function($url, $model, $key) use ($article_id){
                              return  Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url.'&article_id='.$article_id);
                            },
                    'delete'=>function($url, $model, $key) use ($article_id, $options_delete){
                              return  Html::a('<span class="glyphicon glyphicon-trash"></span>', $url.'&article_id='.$article_id, $options_delete);
                            },                   
                ]
            ],
            
        ],
    ]); ?>
    
    

</div>
