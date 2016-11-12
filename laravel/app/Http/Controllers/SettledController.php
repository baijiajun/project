<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Cookie;
use Illuminate\Support\Facades\Session;
use DB,Input,Redirect,url,Validator,Request;
use App\Post;
use App\Http\Controllers\Controller;
use Storage;
//header("content-type:text/html;charset=utf -8");
class SettledController extends Controller
{
    /**
     * 显示指定用户的属性
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function login()
    {
        if(Request::isMethod('post'))
        {
            $user_name = Request::input() ? Request::input("email") : Request::get("email");
            $user_password = Request::input() ? Request::input("password") : Request::get("password");
           $user=DB::table("user")->where(['username'=>$user_name])->get();
          /*  $user_info = array(
                'user_id' => $user[0]['user_id'],
                'password' => $user[0]['password'],
                'email' => $user[0]['email'],
                'phone' => $user[0]['phone'],
                'email_status' => $user[0]['email_status'],
                'status' => $user[0]['status'],
                'com_id' => $user[0]['com_id'],
            );*/
            //var_dump($url);die;
            if($user)
            {
                if($user[0]['password']==$user_password)
                {
                   /* Session::put('user_info',$user_info);
                    var_dump(Session::get('user_info'));die;*/
                    DB::delete("delete from phone");
                    return redirect('/index');
                }
                else
                {
                    $url = $_SERVER["HTTP_REFERER"];
                    echo "<script>alert('密码输入错误');location.href='".$url."'</script>";
                }
            }
            else
            {
                $url = $_SERVER["HTTP_REFERER"];
                echo "<script>alert('用户名不存在');location.href='".$url."'</script>";
            }
        }
        else
        {
            return view('settled.login');
        }

    }
   public function index()
   {

      $arr=$this->cat($pid=0);
       $host_post = $this->post();//热门职位
       $new_post = $this->new_post();
       return view('settled.index',['arr'=>$arr,'host_post'=>$host_post,'new_post'=>$new_post]);
   }
    //无限级分类
    public function cat($pid = 0)
    {
        $category=DB::table('category')->get();
        $arr = array();
        foreach($category as $index => $row)
        {
            /* var_dump($index);die;*/
            // 对每个分类进行循环。
            if($category[$index]['pid'] == $pid)
            {
                //如果有子类
                $row['child'] = $this->cat($category[$index]['cat_id']);
                //调用函数，传入参数，继续查询下级
                $arr[] = $row; //组合数组
            }
        }
        return $arr;
    }
    //热门职位
    function post()
    {
       /* $phone = Post::find(1)->comp;
        var_dump($phone);
       /* $res=Yii::$app->db;*/

        //公司职位 介绍
        $post = DB::select("SELECT * FROM post as a  join comp as b  on a.com_id=b.com_id order by a.read_amount desc limit 10");
        //var_dump($post);die;
        //处理时间
        foreach ($post as $key => $val)
        {
            $post[$key]['issue_time'] = $this->format_date($val['issue_time']);
        }
        return $post;
    }
    /**
     * 最新职位
     * @return [type] [description]
     */
    function new_post()
    {
        //公司职位 介绍
        $new_post = DB::select("SELECT * FROM post as a  join comp as b  on a.com_id=b.com_id order by pos_id desc limit 10");
        //处理时间
        foreach ($new_post as $key => $val)
        {
            $new_post[$key]['issue_time'] = $this->format_date($val['issue_time']);
        }
        return $new_post;
    }
    /**
     * 时间处理 【几分钟前、几小时前、几天前】
     * @param  [type] $the_time [description]
     * @return [type]           [description]
     */
    function format_date($time)
    {
        $time = strtotime($time);//发布时间
        $t=time()-$time;
        $f=array(
            '31536000'=>'年',
            '2592000'=>'个月',
            '604800'=>'星期',
            '86400'=>'天',
            '3600'=>'小时',
            '60'=>'分钟',
            '1'=>'秒'
        );
        foreach ($f as $k=>$v)
        {
            if (0 !=$c=floor($t/(int)$k))
            {
                return $c.$v.'前';
            }
        }
    }

}