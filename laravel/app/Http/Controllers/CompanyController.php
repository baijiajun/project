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
class CompanyController extends Controller
{
    /**
     * 公司列表
     * @return [type] [description]
     */
    function index()
    {
        /*$request =\Yii::$app->request;
        // $db = \Yii::$app->db;//初始化数据库
        $db = \Yii::$app->db;*/
        $data = DB::select("select * from comp as com join category as cat on com.cat_id=cat.cat_id order by com_id desc limit 15")->get();
        // p($data);
        foreach ($data as $key=>$val)
        {
            $data[$key]['towcatdata'] = DB::select("select cat_id,name from category where pid='$val[cat_id]' limit 4")->get();
        }
        return view('company.index',['data'=>$data]);
    }

}