<?php

namespace backend\assets;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $baseUrl = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0';

    public $css = [
        'css/all.min.css',
    ];
}