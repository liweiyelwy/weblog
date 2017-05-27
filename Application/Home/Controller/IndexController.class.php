<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //首页
    public function index(){
      $m=M('we_blog');
      $re=$m->select();
      $this->assign('blog_list',$re);
      $this->display();
    }

    //详情
    public function detail(){
      $id=$_GET['id'];
      $m=M('wb_blog');
      $re=$m->where('id="%s"',$id)->select();
      $this->assign('detail',$re);
      $this->display();
    }

    //评论
    public function evaluate(){
      $data['blog_id']=$_GET['id'];
      $data['nickname']=$_GET['nickname'];
      $data['mail'] = $_GET["email_address"];
      $data['content']=$_GET['content'];
      $data['ip']=get_real_ip();
      $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
      if(preg_match($pattern,$data['mail']) & & strlen($data['content'])>0){
        $m=M("wb_evaluate");
        $re=$m->data($data)->add();
        if($re){
          $info=getArray(0,"评论成功",null);
        }else {
          $info=getArray(1,'评论失败',null);
        }
      }else{
        $info=getArray(1,'邮箱有误或输入内容为空',null);
      }
    }
}
?>
