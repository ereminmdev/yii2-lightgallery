<?php

namespace ereminmdev\yii2\lightgallery;

use yii\web\AssetBundle;

class LightGalleryAsset extends AssetBundle
{
    public $sourcePath = '@npm/lightgallery/dist';

    public $js = [
        YII_DEBUG ? 'js/lightgallery-all.js' : 'js/lightgallery-all.min.js',
    ];

    public $css = [
        YII_DEBUG ? 'css/lightgallery.css' : 'css/lightgallery.min.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
