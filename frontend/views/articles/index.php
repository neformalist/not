<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $post common\models\Article */
/* @var $texts common\models\Article */
?>
<?php $textI8n = 'text_'.$lang;?>
<?php $titleI8n = 'title_'.$lang;?>
<?php $this->title = $post->$titleI8n; ?>

<h1><?=$post->$titleI8n;?></h1>

    <?=  Html::img($post->image);  ?>
<p>
    <?php foreach ($texts as $text){
    echo $text->$textI8n;
    } ?>
    You may change the content of this page by modifying
    
</p>
<?=LinkPager::widget([
    'pagination' => $pages,
]);?>