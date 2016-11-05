<?php
namespace app\models;

use Yii;

use yii\base\Model;

use yii\captcha\Captcha;

class AdminLogin extends Model
{ 
    public $name; 

    public $email; 

    public $subject; 

    public $body; 

    public $verifyCode;//验证码这个变量是必须建的，因为要储存验证码的值` /** * @return array the validation rules. */

    public function rules() 
    { 
           return [ 
                    // name, email, subject and body are required 
                    [['name', 'email', 'subject', 'body'], 'required'], 
                    // email has to be a valid email 
                    ['email', 'email'], 
                    // verifyCode needs to be entered correctly 
                    ['verifyCode', 'captcha'],//注意这里，在百度中查到很多教程，这里写的都不一样，最 简单的写法就像我这种写法，当然还有其它各种写法 
                    //['verifyCode', 'captcha','captchaAction'=>'admin/index/captcha','message'=>'验 证码不正确！'], 这种写法在官网自带的LoginForm.php中有写到，大家可以没事看看 
                    ]; 
    }
    /*
    * * @return array customized attribute labels 
    */ 
    public function attributeLabels() 
    { 
         return [ 
                   // 'verifyCode' => 'Verification Code', 
                   'verifyCode' => '',//在官网的教程里是加上了英文字母，我这里先给去掉了,这里去 掉会不会产生影响因为我还没做接收验证，只做了验证码显示的功能，你们可以自己测试下 
            ]; 
    } 
}
?>