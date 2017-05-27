<?php
namespace Home\Controller;
use Think\Controller;
class BlogController extends BaserController {
    //首页
    public function index(){
        $this->display();
    }

    //
    public function un(){
      unset($_SESSION['user']);
    }

    public function new_blog(){
      if(isset($_GET['title']) && !is_null(trim($_GET['title'])) && isset($_GET['key'])
        && !is_null(trim($_GET['key'])) &&  isset($_GET['about']) &&!is_null(trim($_GET['about']))
        && isset($_GET['author']) && !is_null(trim($_GET['author'])) && isset($_GET['detail'])
        && !is_null(trim($_GET['detail']))){
        $data['blog_id']="blog".date("YmdHis");
        $data['title']=trim($_GET['title']);
        $data['key']=trim($_GET['key']);
        $data['about']=trim($_GET['about']);
        $data['content']=trim($_GET['detail']);
        $data['time']=date("Y-m-d H:i:s");
        $data['author']=trim($_GET['author']);
        $m=M("wb_blog");
        $re=$m->data($data)->add();
        if($re){
          $info=getArray(0,"发表成功",null);
        }else {
          $info=getArray(1,"发表失败",null);
        }
      }else{
        $info=getArray(1,"参数错误",null);
      }
      $jsonp = $_GET["jsonpCallback"];
      echo $jsonp.'('.json_encode($info,JSON_UNESCAPED_UNICODE).')';
    }

    //博客列表
    public function blog_list(){
      $m=M("wb_blog");
      $re=$m->select();
      $this->assign('list',$re);
      $this->display();
    }

    public function modify_blog(){

    }

    public function delete_blog(){

    }

    public function praise(){

    }

    public function inpraise(){

    }

    public function comment(){

    }
}
