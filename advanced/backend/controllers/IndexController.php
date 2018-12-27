<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/27
 * Time: 14:28
 */
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class IndexController extends Controller{

    public function actionIndex(){
        return $this->render('index');
    }
}