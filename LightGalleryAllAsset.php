<?php

namespace ereminmdev\yii2\lightgallery;

class LightGalleryAllAsset extends LightGalleryAsset
{
    public $js = [
        YII_DEBUG ? 'js/lightgallery-all.js' : 'js/lightgallery-all.min.js',
    ];
}
