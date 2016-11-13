<?php
use yii\helpers\Html;
?>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#lang1"><?=Yii::t('main', 'language')." (".\frontend\models\Lang::getCurrent()->name?>)<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
<ul id="lang1" class="collapse">
        <?php foreach ($langs as $lang):?>
            <li class="item-lang">
                <?= Html::a($lang->name, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl()) ?>
            </li>
        <?php endforeach;?>
</ul> 

