<?php
namespace backend\controllers;


use backend\models\Login;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


   /**
     * Login action.
     *
     * @return string
     */
    /*    public function actionLogin()
       {
           /*if (!Yii::$app->user->isGuest) {
               return $this->goHome();
           }

           $model = new LoginForm();
           if ($model->load(Yii::$app->request->post()) && $model->login()) {
               return $this->goBack();
           } else {
               $model->password = '';

               return $this->render('login', [
                   'model' => $model,
               ]);
           }
           $request = Yii::$app->request;
           if($request->isPost){
               $username = $request->post('username');
               $password = $request->post('password');
               $model = new Login();
               $users = Login::find()->where(['username'=>$username])->asArray()->all();
              // var_dump($users);die;
               if(!empty($users)){
                   return '1';
               }else{
                   return '0';
               }
           }
           return $this->render('login');
       }*/

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
