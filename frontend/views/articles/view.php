<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\web\View;
/* @var $this yii\web\View */
/* @var $post common\models\Article */
/* @var $texts common\models\Article */
?>

<?php $this->title = $post->{('title_'.$lang)}; 
      $this->registerJsFile('https://vk.com/js/api/share.js?90', ['position' => View::POS_HEAD]);
?>

<div class="article">
<h1><?=$post->{('title_'.$lang)};?></h1>

    
<p>
    <?php foreach ($texts as $text){
    echo $text->{('text_'.$lang)};
    } ?> 
</p>
<script type="text/javascript">
<!--
document.write(VK.Share.button()); 

-->
</script>
<?=LinkPager::widget([
    'pagination' => $pages,
    'maxButtonCount' => 11,
]);?>
</div>
