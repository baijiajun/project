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

/**
 * User controller
 */
class UserController extends Controller
{
   public function actionWechat(){
        $this->layout= false;
        return $this->render('wechat');
   }

   public function actionPhone(){
   		$this->layout = false;
   		return $this->render('phone');
   }

   public function actionEmail(){
   		$this->layout = false;
   		return $this->render('email');
   }
}
