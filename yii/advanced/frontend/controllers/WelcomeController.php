<?php
namespace frontend\controllers;
header("Content-type:text/html;charset=utf-8");
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
    public $layout = "common";
    public $enableCsrfValidation = false;

    public function actionIndex(){
        $this->layout= false;
        return $this->render('index');
    }

    public function actionShow(){
        $session = \Yii::$app->session;
        $session->open();
        $yii = \Yii::$app->request;
        $name = $yii->post('username');
        $pwd = $yii->post('password');
        $sel = \Yii::$app->db;
        $res = $sel->createCommand("select * from admin where admin_name = '".$name."' and password = '".$pwd."'")
        ->queryAll();
        if ($res[0]['admin_id']) {
            $session->set('admin_id',$res[0]['admin_id']);
            $session->set('admin_name',$res[0]['admin_name']);
            return $this->redirect('?r=welcome/home');
        }else{
         echo "登陆失败";
        }        
    }

    public function actionHome(){
        $session = \Yii::$app->session;
        $session->open();
        //$this->layout= false;
        $id = $session->get('admin_id');
        $name = $session->get('admin_name');
        $sel = \Yii::$app->db;
        $res = $sel->createCommand("select admin.admin_id,admin_name,role.role_id,role_name,node.node_id,node_name,pid,controller,action from admin INNER JOIN a_r ON admin.admin_id = a_r.admin_id
        INNER JOIN role ON a_r.role_id=role.role_id
        INNER JOIN r_n ON role.role_id=r_n.role_id
        INNER JOIN node ON r_n.node_id=node.node_id WHERE admin.admin_id = '".$id."'")
        ->queryAll();
        //var_dump($res);die;
        
        $arr = array();
        foreach ($res as $key => $val) {
            //一级分类
            if ($val['pid']==0) {
                $arr[$key] = $val;
                foreach ($res as $k => $v) {
                    //二级分类
                    if ($v['pid']==$val['node_id']) {
                        $arr[$key]['son'][] = $v;
                    }
                }
            }
        }
        //print_r($arr);die
        $session = \Yii::$app->session;
        $session->open();
        $session->set('rbac',$arr);
        return $this->render('home',['name'=>$name]);
    }
//end    
}