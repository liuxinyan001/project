<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/26
 * Time: 14:00
 */
namespace backend\controllers;


use backend\models\Login;

use Yii;
use yii\web\Controller;



class LoginController extends Controller{

    //登录
    public function actionLogin(){
        $request = Yii::$app->request;
        if($request->isPost){
            $username = $request->post('username');
            $password = $request->post('password');
            $auto = $request->post('atuo');
            $model = new Login();
            $users = Login::find()->where(['username'=>$username,'password'=>$password ])->asArray()->all();
            if(!empty($users) && $password == $users[0]['password']){
                if($auto == 1){
                    $session = Yii::$app->session;
                    $session->set("username",[$username,strtotime('+7 days')]);
                }else{
                    $session = Yii::$app->session;
                    $session->set("username",$username);
                }
                return '1';
            }else{
                return '0';
            }
        }
        return $this->render('login');
    }
    //退出
    public function actionLogout(){
        $session = \Yii::$app->session;
        unset($session['username']);
        return $this->render('login');
    }
}