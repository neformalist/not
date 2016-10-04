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
        'index/css/stylish-portfolio.css',
        'index/css/font-awesome/css/font-awesome.min.css',
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic'
    ];
    public $js = [
        'index/js/index.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
