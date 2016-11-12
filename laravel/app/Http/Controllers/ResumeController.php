<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Session;
use Cookie;
use DB,Input,Redirect,url,Validator,Request;
use App\Post;
use App\Http\Controllers\Controller;
use Storage;
//header("content-type:text/html;charset=utf-8");
class ResumeController extends Controller
{
    public function my_resume()
    {
        $user_info=  Session::get('user_info');
        //var_dump($user_info);die;
        $user_id= Session::get('user_info','user_id');
        /*$m_message=(new \yii\db\Query())->select("user_id,new_id,name,sex,education,phone,
			workyear,email")->from('lashou_user_news')->where(['user_id'=>$user_id])->one();*/
        $m_message1=DB::table('user_news')->where(['user_id'=>8])->get();
        foreach($m_message1 as $m_message)
        {

        }
        //print_r($m_message);die;
        //用户简历表ID
        //$user_info['new_id']=$m_message['new_id'];
        $new_id=$m_message['new_id'];

//        $my_resumes=(new \yii\db\Query())->select("*")->from('lashou_resume')->where(["new_id"=>$m_message['new_id']])->one();
        //print_r($my_resumes);die;
        $my_resumes1=DB::table('resume')->where(['new_id'=>$new_id])->get();
        foreach($my_resumes1 as $my_resumes)
        {

        }
        return view('resume.my_resume',['m_message'=>$m_message,'my_resumes'=>$my_resumes]);
    }
    //基本信息保存
    function resume_info(){

       /* $request = yii::$app->request;
        $db = new \yii\db\Query();
        $session = Yii::$app->session;*/

        //接收需要修改的数据
        $name=Request::get('name');
        $sex=Request::get("sex");
        $education=Request::get("education");
        $phone=Request::get("phone");
        $state=Request::get("state");
        $email=Request::get("email");
        $workyear=Request::get("workyear");
        //保存时间
        //$add_time=date("Y-m-d H:i:s",time());


        //获取用户ID
        /*$user_id=$session['user_info']['id'];*/
/*        $data = ['name'=>$name,'sex'=>$sex,'education'=>$education,'phone'=>$phone,'state'=>$state,'email'=>$email,'workyear'=>$workyear];*/
        //DB::update("update user set u_name ='孙八' where u_id = $id");
/*        $rows1=DB::update("update user_news set [] WHERE user_id=8");*/
        $rows=DB::table('user_news')
            ->where('user_id', 8)
            ->update(array('name'=>$name,'sex'=>$sex,'education'=>$education,'phone'=>$phone,'state'=>$state,'email'=>$email,'workyear'=>$workyear));

        echo $rows;
    }
    function resume_work(){

        /*$request = yii::$app->request;
        $db = new \yii\db\Query();
        $session = Yii::$app->session;

        //获取用户new_id
        $new_id=$session['new_id'];*/

        //接收需要修改的数据
        $city=Request::get('city');
        $work_state=Request::get('work_state');
        $post=Request::get('post');
        $month=Request::get('month');
        //保存时间
        //$add_time=date("Y-m-d H:i:s",time());

/*               $data = ['city'=>$city,'work_state'=>$work_state,'post'=>$post,'month'=>$month];*/
        $rows=DB::table('resume')
            ->where('new_id', 80)
            ->update(array('city'=>$city,'work_state'=>$work_state,'post'=>$post,'month'=>$month));
/*        $rows=$db->createCommand()->update('lashou_resume',$data,"new_id=".$new_id)->execute();*/
        echo $rows;

    }
    /**
     * 工作经历保存
     * @return [type] [description]
     */
    function resume_last_work(){

       /* $request = yii::$app->request;
        $db = new \yii\db\Query();
        $session = Yii::$app->session;

        //获取用户new_id
        $new_id=$session['new_id'];*/

        //接收需要修改的数据
        $wor_comname=Request::get('wor_comname');
        $wor_post=Request::get('wor_post');
        $wor_begtime=Request::get('wor_begtime');
        $wor_endtime=Request::get('wor_endtime');
        //保存时间
        //$add_time=date("Y-m-d H:i:s",time());

      /*  $data = ['wor_comname'=>$wor_comname,'wor_post'=>$wor_post,'wor_begtime'=>$wor_begtime,'wor_endtime'=>$wor_endtime];
        $rows=DB::update("update resume set $data WHERE new_id=80");*/
        $rows=DB::table('resume')
            ->where('new_id', 80)
            ->update(array('wor_comname'=>$wor_comname,'wor_post'=>$wor_post,'wor_begtime'=>$wor_begtime,'wor_endtime'=>$wor_endtime));
/*        $rows=$db->createCommand()->update('lashou_resume',$data,"new_id=".$new_id)->execute();*/
        echo $rows;

    }
    /**
     * 项目经验
     * @return [type] [description]
     */
    function resume_last_item(){

        /*$request = yii::$app->request;
        $db = new \yii\db\Query();
        $session = Yii::$app->session;

        //获取用户new_id
        $new_id=$session['new_id'];*/

        //接收需要修改的数据
        $item_name=Request::get('item_name');
        $item_post=Request::get('item_post');
        $item_begtime=Request::get('item_begtime');
        $item_endtime=Request::get('item_endtime');
        $item_desc=Request::get('item_desc');
        //保存时间
        //$add_time=date("Y-m-d H:i:s",time());

        /*$data = ['item_name'=>$item_name,'item_post'=>$item_post,'item_begtime'=>$item_begtime,'item_endtime'=>$item_endtime,'item_desc'=>$item_desc];
        $rows=DB::update("update resume set $data WHERE new_id=80");*/
        $rows=DB::table('resume')
            ->where('new_id', 80)
            ->update(array('item_name'=>$item_name,'item_post'=>$item_post,'item_begtime'=>$item_begtime,'item_endtime'=>$item_endtime,'item_desc'=>$item_desc));
/*        $rows=DB::update('lashou_resume',$data,"new_id=".$new_id)->execute();*/
        echo $rows;

    }
    /**
     * 教育背景
     * @return [type] [description]
     */
    function resume_last_study(){

       /* $request = yii::$app->request;
        $db = new \yii\db\Query();
        $session = Yii::$app->session;

        //获取用户new_id
        $new_id=$session['new_id'];*/

        //接收需要修改的数据
        $stu_name=Request::get('stu_name');
        $stu_edu=Request::get('stu_edu');
        $major_name=Request::get('major_name');
        $major_begtime=Request::get('major_begtime');
        $major_endtime=Request::get('major_endtime');

        //保存时间
        //$add_time=date("Y-m-d H:i:s",time());

      /*  $data = ['stu_name'=>$stu_name,'stu_edu'=>$stu_edu,'major_name'=>$major_name,'major_begtime'=>$major_begtime,'major_endtime'=>$major_endtime];
        $rows=DB::update("update resume set $data WHERE new_id=80");*/
        $rows=DB::table('resume')
            ->where('new_id', 80)
            ->update(array('stu_name'=>$stu_name,'stu_edu'=>$stu_edu,'major_name'=>$major_name,'major_begtime'=>$major_begtime,'major_endtime'=>$major_endtime));
/*        $rows=$db->createCommand()->update('lashou_resume',$data,"new_id=".$new_id)->execute();*/
        echo $rows;

    }
    /**
     * 自我描述
     * @return [type] [description]
     */
    function resume_my_desc(){

       /* $request = yii::$app->request;
        $db = new \yii\db\Query();
        $session = Yii::$app->session;

        //获取用户new_id
        $new_id=$session['new_id'];*/
        //保存时间
        //$add_time=date("Y-m-d H:i:s",time());
        //接收需要修改的数据
        $self_desc=Request::get('self_desc');

        /*$data = ['self_desc'=>$self_desc];
        $rows=DB::update("update resume set $data WHERE new_id=80");*/
        $rows=DB::table('resume')
            ->where('new_id', 80)
            ->update(array('self_desc'=>$self_desc));
/*        $rows=$db->createCommand()->update('lashou_resume',$data,"new_id=".$new_id)->execute();*/
        echo $rows;

    }
    /**
     * 作品展示
     * @return [type] [description]
     */
    function resume_my_opus(){

        /*$request = yii::$app->request;
        $db = new \yii\db\Query();
        $session = Yii::$app->session;

        //获取用户new_id
        $new_id=$session['new_id'];*/

        //保存时间
        //$add_time=date("Y-m-d H:i:s",time());
        //接收需要修改的数据
        $opus_url=Request::get('opus_url');
        $opus_exp=Request::get('opus_exp');

        /*$data = ['opus_url'=>$opus_url,'opus_exp'=>$opus_exp];
        $rows=DB::update("update resume set $data WHERE new_id=80");*/
        $rows=DB::table('resume')
            ->where('new_id', 80)
            ->update(array('opus_url'=>$opus_url,'opus_exp'=>$opus_exp));
/*        $rows=$db->createCommand()->update('lashou_resume',$data,"new_id=".$new_id)->execute();*/
        echo $rows;
    }
  //职位或公司搜索
    function search_push()
    {
        header("content-type:text/html;charset=utf8");
       /* $request = yii::$app->request;
        $db = yii::$app->db;*/
        //print_R($request->post());die;
        $kd = Request::post('kd');
        // echo $kd;die;
        $type = Request::post('type');
        // echo $type;die;
        if($type=="公司")
        {
            if($kd)
            {
                $data = DB::select("select * from comp as com join category as cat on com.cat_id=cat.cat_id where com_name like '%$kd%'order by com_id desc limit 15");
                //p($data);
                foreach ($data as $key=>$val)
                {
                    $data[$key]['towcatdata'] = DB::select("select cat_id,name from category where pid='$val[cat_id]' limit 4");
                }
                return view('company.index',['data'=>$data,'status'=>"1"]);
            }
            else
            {
                return redirect('/index');
            }
        }
        else
        {
            if($kd)
            {
                require('../sphinxall/postsphinx/api/sphinxapi.php');        //require'./sphinxapi.php'; //包含sphinxapi类
                $sphinx= new SphinxClient(); //实例化
                $sphinx->SetServer('127.0.0.1',9312);//链接
                $res=$sphinx->Query($kd,"*");//查询的字段第二参数是你配置文件里面写得规则这里是*就会匹配所有规则
                // p($res);
                if(empty($res['matches']))
                {
                    $status = "empty";
                    $arr = array();
                    // p($arr);
                    return view('resume.search_push',['arr'=>$arr,'status'=>"0"]);
                }
                else
                {
                    $data=$res['matches'];
                    foreach($data as $k=>$v){
                        $arr[] = DB::select("SELECT * FROM post join comp on post.com_id=comp.com_id where pos_id=$k");
                    }
                    // p($arr);die;
                    if(empty($arr[0])){
                        unset($arr[0]);
                    }
                    foreach($arr as $k=>$v){
                        $arr[$k]=str_replace($kd,"<font color='red'>$kd</font>",$v);
                        $arr[$k]['shihou']=$this->format_date($arr[$k]['issue_time']);
                    }
                    $status = "1";
                }
            }
            else
            {
                $arr= DB::select("SELECT * FROM post join comp on post.com_id=comp.com_id limit 10");
                foreach($arr as $k=>$v)
                {
                    $arr[$k]['shihou']=$this->format_date($arr[$k]['issue_time']);
                }
            }
            // p($arr);
            return view('resume.search_push',['arr'=>$arr,'status'=>"1"]);
        }
    }


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