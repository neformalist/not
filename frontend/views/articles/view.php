<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $post common\models\Article */
/* @var $texts common\models\Article */
?>

<?php $this->title = $post->{('title_'.$lang)}; ?>

<h1><?=$post->{('title_'.$lang)};?></h1>

    
<p>
    <?php foreach ($texts as $text){
    echo $text->{('text_'.$lang)};
    } ?>
   
    
</p>
<?=LinkPager::widget([
    'pagination' => $pages,
]);?>