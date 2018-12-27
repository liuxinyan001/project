<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/26
 * Time: 13:53
 */
namespace backend\assets;
use yii\web\AssetBundle;

class LayuiAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'layui/css/layui.css',
        'layui/css/layui.mobile.css',
    ];
    public $js = [
    ];

}