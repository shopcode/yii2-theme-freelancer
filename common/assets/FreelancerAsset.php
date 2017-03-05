<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace common\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */

class FreelancerAsset extends AssetBundle {
    
    public $basePath = '@webroot';
    public $baseUrl = '@web/../../themes/freelancer/assets/';
    
    public $sourcePath = '@freelancer/assets';
    
    public $css = [
        'css/bootstrap.min.css',
        'http://fonts.googleapis.com/css?family=Montserrat:400,700',
        'http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic',
        'css/freelancer.css',
        'font-awesome/css/font-awesome.min.css',
    ];
    
    public $js = [
        'js/bootstrap.min.js',
        'js/classie.js',
        'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
        'js/cbpAnimatedHeader.js',
        'js/jqBootstrapValidation.js',
        'js/contact_me.js',
        'js/freelancer.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
    
    
}