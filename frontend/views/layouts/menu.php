<?php

use yii\helpers\Url;
?>
<a id="menu-toggle" href="javascript:void(0);" class="btn btn-dark btn-lg toggle">Menu  <i class="fa fa-bars"></i></a>   
<nav id="sidebar-wrapper">
            <ul class="sidebar-nav menu">
                <a id="menu-close" href="javascript:void(0);" class="btn btn-orange-close btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
                <li class="sidebar-brand">
                    <a href="<?= Url::to(['/site'])?>"><?=Yii::t('landing', 'header')?></a>
                </li>
                <li>
                    
                    <a href="<?= Url::to(['/site'])?>"><?=Yii::t('main', 'home')?><i class="fa fa-home" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="<?= Url::to(['/examples'])?>"><?=Yii::t('main', 'examples')?><i class="fa fa-files-o" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="<?= Url::to(['/articles'])?>"><?=Yii::t('main', 'articles')?><i class="fa fa-book" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="<?= Url::to(['/site/contact'])?>"><?=Yii::t('main', 'contact')?><i class="fa fa-envelope" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="<?= Url::to(['/site/price'])?>"><?=Yii::t('main', 'preis')?><i class="fa fa-credit-card" aria-hidden="true"></i></a>
                </li>
                 <li>
                    <?=\frontend\widgets\LangWidget::widget()?>
                </li>   
            </ul>
    </nav>