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
 * Business controller
 */
class BusinessController extends Controller 
{
   public function actionList(){
   		$this->layout= false;
        return $this->render('list');
   }

   public function actionBlacklist(){
   		$this->layout= false;
        return $this->render('blacklist');
   }

}
