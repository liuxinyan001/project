<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/27
 * Time: 14:30
 */

if (empty(Yii::$app->session->get('username'))) {
    return "<script>alert('注册成功!');window.location.href='login/login';</script>";
}
echo "首页";