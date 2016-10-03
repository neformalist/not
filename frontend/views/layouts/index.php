<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\IndexAsset;
use common\widgets\Alert;
use yii\jui\Accordion;
use frontend\assets\AppAsset;

IndexAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">Menu  <i class="fa fa-bars"></i></a>
   <?php
   /* NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label'=>'', 'options'=>['id'=>'menu-toggle', 'class'=>'fa fa-bars']],
        ['label' => Yii::t('main', 'home'), 'options' => ['']],
        ['label' => Yii::t('main', 'home'), 'url' => ['/site/index']],
        ['label' => Yii::t('main', 'about'), 'url' => ['/site/about']],
        ['label' => Yii::t('main', 'contact'), 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => Yii::t('main', 'signup'), 'url' => ['/site/signup']];
        $menuItems[] = ['label' => Yii::t('main', 'login'), 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    
    $menuItems[]= ['label' => \frontend\models\Lang::getCurrent()->name,
                   'items'=>[\frontend\widgets\LangWidget::widget()]
                  ];
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    */?>
    <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
                <li class="sidebar-brand">
                    <a href="#top" onclick=$("#menu-close").click();>Start Bootstrap</a>
                </li>
                <li>
                    <a href="#top" onclick=$("#menu-close").click();><?=Yii::t('main', 'home')?></a>
                </li>
                <li>
                    <a href="#about" onclick=$("#menu-close").click();><?=Yii::t('main', 'about')?></a>
                </li>
                <li>
                    <a href="#services" onclick=$("#menu-close").click();><?=Yii::t('main', 'home')?></a>
                </li>
                <li>
                    <a href="#portfolio" onclick=$("#menu-close").click();><?=Yii::t('main', 'contact')?></a>
                </li>
                <li>
                    <a href="#contact" onclick=$("#menu-close").click();><?=Yii::t('main', 'login')?></a>
                </li>
                 <li>
                    <?=\frontend\widgets\LangWidget::widget()?>
                </li>   
            </ul>
    </nav>
   
        <?= $content ?>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

