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
use frontend\controllers\WelcomeController;

/**
 * User controller
 */
class UserController extends Controller
{
	public $layout = "common";
	public $enableCsrfValidation = false;

	/**
	 * [actionList 用户列表页面]
	 */
   public function actionList(){
   		$yii = \Yii::$app->db;
   		$res = $yii->createCommand("select * from user")
   		->queryAll();
        return $this->render('list',['res'=>$res]);
   }

   /**
    * [actionDel 删除用户方法]
    */
   public function actionDel(){
   		$yii = Yii::$app->request;
   		$uid = $yii->post('uid');
   		$sql = Yii::$app->db;
   		$res = $sql->createCommand("delete from user where user_id = '".$uid."'")
   		->execute();
   		$ret =  0;
   		if ($res) {
   			echo json_encode($res);
   		}else{
   			echo json_encode($ret);
   		}
   }

   /**
    * [actionSelf 用户详情页面]
    */
   public function actionSelf(){
   		$yii = Yii::$app->request;
   		$uid = $yii->get('uid');
   		$sql = Yii::$app->db;
      //查询用户的基本信息
   		$res = $sql->createCommand("select * from user INNER JOIN infomation ON `user`.user_id=infomation.user_id WHERE `user`.user_id='".$uid."'")
   		->queryAll();
      //查询该用户投简历的公司
      $req = $sql->createCommand("select * from user INNER JOIN user_res ON `user`.user_id = user_res.user_id
                                  INNER JOIN resume on user_res.res_id = resume.res_id
                                  INNER JOIN enterprise_resume ON resume.res_id=enterprise_resume.res_id
                                  INNER JOIN enterprise_info ON enterprise_resume.enter_id=enterprise_info.enter_id where `user`.user_id='".$uid."'")
      ->queryAll();
   		//var_dump($res);die;
      //    var_dump($req);die;
   		return $this->render('infomation',['res'=>$res,'req'=>$req]);
   } 

//end
}
