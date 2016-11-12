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
 * Website controller
 */
class WebsiteController extends Controller
{
   public function actionTheme(){
        $this->layout= false;
        return $this->render('theme');
   }

   public function actionNavigation(){
   		$this->layout = false;
   		return $this->render('navigation');
   }

   public function actionFoot(){
   		$this->layout = false;
   		return $this->render('foot');
   }
}
