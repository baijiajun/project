<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use app\models\ValidateCode;
use app\models\AdminLogin;

/**
 * Welcome controller
 */
class WelcomeController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex(){
        $AdminLogin = new AdminLogin();//这里要把刚才写的类new下，注意你们要引入文件路径额
        $this->layout= false;
        return $this->render('index',array('AdminLogin'=>$AdminLogin));
    }

    /**
     * 用户授权规则
     * @return [type] [description]
     */
    public function behaviors()
    {
        return [
               'access' => [
                    'class' => AccessControl::className(),
                    'only' => ['logout', 'signup','login'],//这里一定要加
                    'rules' => [
                        [
                            'actions' => ['login','captcha'],
                            'allow' => true,
                            'roles' => ['?'],
                        ],
                        [
                            'actions'=>['logout','edit','add','del','index','users','thumb','upload','cutpic','follow','nofollow'],
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

    public function actions()
    {       
            return  [   
    //                 'captcha' => 
    //                    [
    //                        'class' => 'yii\captcha\CaptchaAction',
    //                        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
    //                    ],  //默认的写法
                            'captcha' => [
                                        'class' => 'yii\captcha\CaptchaAction',
                                        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                                        'backColor'=>0x000000,//背景颜色
                                        'maxLength' => 6, //最大显示个数
                                        'minLength' => 5,//最少显示个数
                                        'padding' => 5,//间距
                                        'height'=>40,//高度
                                        'width' => 130,  //宽度  
                                        'foreColor'=>0xffffff,     //字体颜色
                                        'offset'=>4,        //设置字符偏移量 有效果
                                        //'controller'=>'login',        //拥有这个动作的controller
                                ],
            ];
    }

    public function actionShow(){
        $session = \Yii::$app->session;
        $session->open();
        $this->layout= false;
        $res = \Yii::$app->request;
        $username =  $res->post('username');
        $password = $res->post('password');
        $code = $res->post('code');
        var_dump($sesion); die;
        return $this->render('welcome');
    }

//end    
}
