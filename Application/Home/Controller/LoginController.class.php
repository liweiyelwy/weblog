<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
  //登录页面
  public function login(){
    $this->display();
  }

  //登录
  public function login_check(){
    $account=trim($_GET['account']);
    $password=trim($_GET['password']);
    $m=M('wb_user');
    $res=$m->where('account="%s"',$account)->find();
    if($res && $password==$res['password']){
     $_SESSION['user']=$res['name'];
     $info=getArray(0,"登录成功",null);
    }else{
     $info=getArray(1,"登录失败",null);
    }
    $jsonp = $_GET["jsonpCallback"];
    echo $jsonp.'('.json_encode($info,JSON_UNESCAPED_UNICODE).')';
  }

  //退出登录
  public function unlogin(){
    unset($_SESSION['user']);
    $info=getArray(0,'退出登录成功',null);
    $jsonp = $_GET["jsonpCallback"];
    echo $jsonp.'('.json_encode($info,JSON_UNESCAPED_UNICODE).')';
  }
}
?>
