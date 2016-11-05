<?php
namespace frontend\controllers;
use yii\web\Controller;
use yii;
use yii\data\Pagination;
use app\models\Test;
class BaiController extends Controller
{
    public function actionIndex(){
        echo "<h1>hello world</h1>";
    }

    public function actionAdmin(){
        $id = \YII::$app->request;
        echo $id->get('id');
    }

    public function actionShow(){
        //return $this->renderPartial('in->dex');
         $test=new Test();   //实例化model模型
         $arr=$test->find();
         $pages = new Pagination([
         //'totalCount' => $countQuery->count(),
         'totalCount' => $arr->count(),
         'pageSize'   => 3   //每页显示条数
         ]);
          $str=$arr->select('*')
          ->from('new')
          ->offset($pages->offset)
          ->limit($pages->limit)
          ->orderBy(['id'=>SORT_DESC])
          ->asArray()
          ->all();
        // $db = \Yii::$app->db;
        // //查询
        // $res = $db->createCommand("select * from new order by id desc limit 3 ")
        // ->queryAll();
        // $date = array();
        // $date['view_res'] = $res;
        return $this->render('index',['str'=>$str,'pages'=>$pages]);
    }

    public function actionInsert(){
        $db = \Yii::$app->db;
        $res = \Yii::$app->request;
        $name =  $res->post('name');
        $content = $res->post('content');
        $id = $db->createCommand()
        ->insert('new',['name'=>"$name",'content'=>"$content"])
        ->execute();
        if($id){
            $res = $db->createCommand("select * from new order by id desc limit 1")->queryAll();
            $result = $res[0]['id'];
            echo $result;
        }else{
            echo 0;
        }
    }

    public function actionDel(){
        $yii = \YII::$app->request;
        $id = $yii->get('id');
        $db = \Yii::$app->db;
        $res = $db->createCommand()
        ->delete('new','id=:id',array(':id'=>$id))
        ->execute();
        if ($res) {
            echo 1;
        }else{
            echo 0;
        }
    }

//结尾
}

?>