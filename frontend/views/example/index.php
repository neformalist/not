<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $example common\models\Example */

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
    
        <?php foreach ($example as $item): ?>
        <div class="row item-post">
        
            <?php $image = '<div class="media col-md-3 ">'
                    . '<figure class="pull-left">'
                    . Html::img($item->images[0]->image, ['class' => 'media-object img-rounded img-responsive'])
                    . '</figure>'
                    . '</div>'?>
            <?=Html::a($image, Url::to(['/example/'. $item->url]), ['class' =>'']);?>
            <div class="col-md-6 ">
                <h4 class=""><?=Html::a($item->title_ru, Url::to(['/example/'. $item->url]), ['class' =>'']);?></h4>
                <p class="list-group-item-text"><?=\yii\helpers\BaseStringHelper::truncate($item->description_ru, 150)?></p>
            </div>
            <div class="col-md-3  text-center">
                <p><?=($item->hits ? $item->hits :'0')?>
                        <small>
                         <?php
                         switch ($item->hits){
                            case 1 : echo "просмотр"; break;
                            case 2 : echo "просмотра"; break;
                            case 3 : echo "просмотра"; break;
                            case 4 : echo "просмотра"; break;
                            default : echo "просмотров";
                         }
                         ?>   
                        </small>
                        </p>
                <?=Html::a('Далее!', Url::to(['/example/'. $item->url]), ['class' => 'btn btn-default btn-lg btn-block'])?>
            </div>
        
        </div>    
        <?php endforeach;?>
    
</div>
