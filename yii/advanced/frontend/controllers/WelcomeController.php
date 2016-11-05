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


/**
 * Welcome controller
 */
class WelcomeController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex(){
        $this->layout= false;
        return $this->render('index');
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
