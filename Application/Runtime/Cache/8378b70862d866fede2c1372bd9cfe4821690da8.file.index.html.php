<?php /* Smarty version Smarty-3.1.6, created on 2016-12-22 10:56:48
         compiled from "./Application/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:37458523500848384-37291204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8378b70862d866fede2c1372bd9cfe4821690da8' => 
    array (
      0 => './Application/Home/View\\Index\\index.html',
      1 => 1482375287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37458523500848384-37291204',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_585235008f898',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585235008f898')) {function content_585235008f898($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta name="description" content="CAMPUFIX靠谱修，专注于高校手机、电脑的维修维护平台。做大学生值得信赖的维修品牌。" />
    <meta name="keywords" content="手机维修, 电脑维修, 校园维修, 维修, campufix, 靠谱修, 校园, 电脑, 手机, 高校, C客, 大学维修, 维修界的抢单平台" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta name="format-detection" content="telephone=no">
    <title>CAMPUFIX靠谱修</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen" />




    <link rel="stylesheet" href="//cdn.bootcss.com/weui/0.4.3/style/weui.min.css">
        <link rel="stylesheet" href="//cdn.bootcss.com/jquery-weui/0.8.0/css/jquery-weui.min.css">
        <script src="//cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
        <script src="//cdn.bootcss.com/jquery-weui/0.8.0/js/jquery-weui.min.js"></script>
        <script src="//cdn.bootcss.com/jquery-weui/0.8.0/js/swiper.min.js"></script>


</head>
<body>

</body>
<script type="text/javascript">
window.onload = function(){
  if(isWeiXin()){
    window.location="<?php echo $_SERVER['ROOT'];?>
/thinkphp/index.php/Home/Index/wx_index";
  }else{
    window.location="<?php echo $_SERVER['ROOT'];?>
/thinkphp/index.php/Home/Index/indexpagae";
  }
}
function isWeiXin(){
  var ua = window.navigator.userAgent.toLowerCase();
  if(ua.match(/MicroMessenger/i) == 'micromessenger'){
      return true;
  }else{
      return false;
  }
}
</script>
</html>
<?php }} ?>