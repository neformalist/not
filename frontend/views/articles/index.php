<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $post common\models\Article */
/* @var $texts common\models\Article */
?>
<?php $this->title = $post->title; ?>
<?php $name = 'text_'.$lang;?>
<h1><?=$post->title;?></h1>

    <?=  Html::img($post->image);  ?>
<p>
    <?php foreach ($texts as $text){
    echo $text->$name;
    } ?>
    You may change the content of this page by modifying
    
</p>
<?=LinkPager::widget([
    'pagination' => $pages,
]);?>