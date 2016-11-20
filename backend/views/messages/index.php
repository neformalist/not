<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MessagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Messages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="messages-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Messages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions'=>function ($model, $key, $index, $grid){
                            $class= ($model->new)? 'success':'';
                            return [
                                'key'=>$key,
                                'index'=>$index,
                                'class'=>$class
                            ];
                        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'first_name',
            'last_name',
            'email:email',
            'phone',
            [
                'attribute' =>'text',
                'value' => function ($data){
                             return \yii\helpers\BaseStringHelper::truncate($data->text, 50);
                           }
                ],
            // 'file',
            'created_at',
            // 'new',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
