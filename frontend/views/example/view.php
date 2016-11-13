<?php
use yeesoft\lightbox\Lightbox;
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $example common\models\Example */
/* @var $lang frontend\models\Lang */
?>
<?php $this->title = empty($example->{('title_'.$lang)})?$example->{'title_ru'}:$example->{('title_'.$lang)}; ?>

<?php empty($example->{('title_'.$lang)})?$example->{'title_ru'}:$example->{('title_'.$lang)}?>

<h1><?=empty($example->{('title_'.$lang)})?$example->{'title_ru'}:$example->{('title_'.$lang)}?></h1>


<?=empty($example->{('description_'.$lang)})?$example->{'description_ru'}:$example->{('description_'.$lang)}?>

<?php $images = []; $i = 1;
    foreach ($example->images as $image){
               $imageItem = [
                   'thumb' => $image->image,
                   'image' => $image->image,
                   'title' => $example->{('title_'.$lang)}.' '.$i,
                   'group' => 'image-set1',
               ];
               $i++;
               $images[] = array_merge($images, $imageItem);       
    }
    
?>
<div class="text-center" style="background-color: #000;">
<?=Lightbox::widget([
    'options' => [
        'fadeDuration' => '2000',
        'albumLabel' => "Изображение %1 из %2",
        'wrapAround' => true,
        'alwaysShowNavOnTouchDevices' => true
     ],
    'linkOptions' => ['class' => 'pull-left'],
    'imageOptions' => ['class' => 'thumbnail', 'width' => 200],
    'items' => $images,           
]);?>
</div>


