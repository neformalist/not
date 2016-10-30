<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $model common\models\Example */

$this->title = $model->title_ru;
$this->params['breadcrumbs'][] = ['label' => 'Examples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="example-view">

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
            'title_ru',
            'title_en',
            'updated_at',
            'created_at',
            'visible:boolean',
            'description_ru:html',
            'description_en:html',
            'hits',
            'url:url',
        ],
    ]) ?>
    
    
    <?=  Html::a('Add', ['images/create', 'example_id'=> $model->id], ['class' => 'btn btn-primary']);?>
  
    <?= GridView::widget([
        'dataProvider' => $dataProviderImages,
        'filterModel' => $searchModelImages,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute' =>'image',
              'format' => 'html',  
              'value' => function($data){
                 
                return ($data->image)? Html::img($data->image,[
                    'style' => 'width:150px;'
                    ]) : NULL;
                },
            ],

            [
                 'attribute' => 'visible',
                 'filter' => [0 => "No", 1 => 'Yes'],
                 'format' => 'boolean'
            ], 
                    
            ['class' => 'yii\grid\ActionColumn',
             'controller' => 'images',
                'buttons'=>[
                    'update'=>function($url, $model, $key) use ($example_id){
                              return  Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url.'&example_id='.$example_id);
                            },
                    'delete'=>function($url, $model, $key) use ($example_id, $options_delete){
                              return  Html::a('<span class="glyphicon glyphicon-trash"></span>', $url.'&example_id='.$example_id, $options_delete);
                            },                   
                ]
            ], 
        ],
                        
    ]); ?>
    
    
    <?= Html::a('Add', ['meta-example/create', 'example_id'=> $model->id], ['class' => 'btn btn-primary']);?>
     <?= GridView::widget([
        'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getMetaExamples()]),
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
             'controller' => 'meta-example',
                'buttons'=>[
                    'update'=>function($url, $model, $key) use ($example_id){
                              return  Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url.'&example_id='.$example_id);
                            },
                    'delete'=>function($url, $model, $key) use ($example_id, $options_delete){
                              return  Html::a('<span class="glyphicon glyphicon-trash"></span>', $url.'&example_id='.$example_id, $options_delete);
                            },                   
                ]
            ],
            
        ],
    ]);?>

</div>
