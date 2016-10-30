<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $post common\models\Article */

?>
<style>
    body{
        background-color:#F6F5EE;
    }
    h4{
        padding: 2%;
        color:#397AB7;
    }
</style>

<div class="container">
    
        <?php foreach ($post as $item): ?>
        <div class="row item-post">
        
            <?php $image = '<div class="media col-md-3 ">'
                    . '<figure class="pull-left">'
                    . Html::img($item->image, ['class' => 'media-object img-rounded img-responsive'])
                    . '</figure>'
                    . '</div>'?>
            <?=Html::a($image, Url::to(['/articles/'. $item->url]), ['class' =>'']);?>
            <div class="col-md-6 ">
                <h4 class=""><?=Html::a($item->title_ru, Url::to(['/articles/'. $item->url]), ['class' =>'']);?></h4>
                <p class=""><?=$item->description_ru?></p>
            </div>
            <div class="col-md-3  text-center">
                <h2><?=($item->hits ? $item->hits :'0')?><small> просмотров </small></h2>
                <?=Html::a('Далее!', Url::to(['/articles/'. $item->url]), ['class' => 'btn btn-default btn-lg btn-block'])?>
            </div>
        
        </div>    
        <?php endforeach;?>
    
</div>
