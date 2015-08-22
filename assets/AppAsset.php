<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com/css?family=Hind:400,500,300,600,700',
        'themes/global/plugins/font-awesome/css/font-awesome.min.css',
        'themes/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'themes/global/plugins/bootstrap/css/bootstrap.min.css',
        'themes/global/plugins/owl.carousel/assets/owl.carousel.css',
        'themes/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css',
        'themes/global/plugins/cubeportfolio/cubeportfolio/css/cubeportfolio.min.css',
        //'themes//frontend/layout/css/style.css',
        'themes/frontend/onepage2/css/custom.css',
        'themes/frontend/onepage2/css/layout.css'
        
        //'css/site.css',
    ];
    public $js = [
        'themes/global/plugins/jquery.min.js',
        'themes/global/plugins/jquery-migrate.min.js',
        'themes/global/plugins/bootstrap/js/bootstrap.min.js',
        'themes/global/plugins/jquery.easing.js',
        'themes/global/plugins/jquery.parallax.js',
        'themes/global/plugins/smooth-scroll/smooth-scroll.js',
        'themes/global/plugins/owl.carousel/owl.carousel.min.js',
        'themes/global/plugins/cubeportfolio/cubeportfolio/js/jquery.cubeportfolio.min.js',
        'themes/frontend/onepage2/scripts/portfolio.js',
        'themes/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js',
        'themes/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js',
        'http://maps.google.com/maps/api/js?sensor=true',
        'themes/global/plugins/gmaps/gmaps.js',
        'themes/frontend/pages/scripts/contact-us.js',
        'themes/frontend/onepage2/scripts/revo-ini.js',
        'themes/frontend/onepage2/scripts/custom.js',
        'themes/frontend/onepage2/scripts/layout.js',
        'themes/frontend/layout/scripts/back-to-top.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
