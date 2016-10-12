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
            'visible',
            'description:ntext',
            'author',
            'hits',
            'url:url',
        ],
    ]) ?>
    
   
    
    <?= GridView::widget([
        'dataProvider' => new \yii\data\ActiveDataProvider(['query' => $model->getTexts()]),
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'text_ru',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    
    

</div>
