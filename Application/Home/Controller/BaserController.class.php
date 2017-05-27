<?php
namespace Home\Controller;
use Think\Controller;
class BaserController extends Controller {
    //首页
    public function _initialize(){
      if(isset($_SESSION['user'])){

      }else {
        $this->redirect('Login/login');
      }
    }

}
?>
