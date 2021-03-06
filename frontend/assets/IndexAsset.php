<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class IndexAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'https://fonts.googleapis.com/icon?family=Material+Icons',
        'index/css/stylish-portfolio.css',
        'index/css/font-awesome/css/font-awesome.min.css',
        'index/css/scroll.css',
        'index/css/lightslider.min.css',
        'css/menu.css',
        '//fonts.googleapis.com/css?family=Andika',
        
        
    ];
    public $js = [
        'index/js/parallax-scroll.js',
        'js/menu.js',
        'index/js/jquery.mb.YTPlayer.min.js',
        'index/js/lightslider.min.js',
        'index/js/index.js',
        'index/js/scroll.js',
       
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
