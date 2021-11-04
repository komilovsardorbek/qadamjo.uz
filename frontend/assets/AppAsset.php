<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/normalize.css',
        '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css',
        'css/owl.carousel.css',
        'css/bootstrap-select.css',
        'css/scrollbar.css',
        'css/jquery.mmenu.all.css',
        'css/prettyPhoto.css',
        'css/transitions.css',
        'css/main.css',
        'css/color.css',
        'css/responsive.css',
        'css/style.css',
        'css/share.css',
    ];
    public $js = [
        'js/vendor/bootstrap.js',
        'js/vendor/bootstrap.min.js',
        'js/bootstrap-select.min.js',
        'js/jquery-scrolltofixed.js',
        'js/owl.carousel.min.js',
        'js/jquery.mmenu.all.js',
        'js/packery.pkgd.min.js',
        'js/jquery.vide.min.js',
        'js/scrollbar.min.js',
        'js/prettyPhoto.js',
        'js/countdown.js',
        'js/parallax.js',
        'js/gmap3.js',
        'js/main.js',
        'js/vendor/modernizr-2.8.3-respond-1.4.2.min.js',
        'js/vendor/npm.js',
        'js/slider.js',

    ];
    public $depends = [
        YiiAsset::class,
    ];
}
