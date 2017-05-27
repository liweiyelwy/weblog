<?php /* Smarty version Smarty-3.1.6, created on 2017-04-18 09:39:10
         compiled from "./Application/Home/View\Login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2320458f481d293b1a4-22987054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e057bb2e2c8b5abbc5fea97ffea30abc7ed15af' => 
    array (
      0 => './Application/Home/View\\Login\\login.html',
      1 => 1492479049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2320458f481d293b1a4-22987054',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58f481d297e55',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f481d297e55')) {function content_58f481d297e55($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>登录</title>
		<link rel="stylesheet" href="__PUBLIC__/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="__PUBLIC__/css/login.css" />
	</head>

	<body class="beg-login-bg">
		<div class="beg-login-box">
			<header>
				<h1>后台登录</h1>
			</header>
			<div class="beg-login-main">
				<div class="layui-form" >
					<div class="layui-form-item">
						<label class="beg-login-icon">
                        <i class="layui-icon">&#xe612;</i>
                    </label>
						<input type="text" id="userName"  placeholder="这里输入登录名" class="layui-input">
					</div>
					<div class="layui-form-item">
						<label class="beg-login-icon">
                        <i class="layui-icon">&#xe642;</i>
                    </label>
						<input type="password" id="password"   placeholder="这里输入密码" class="layui-input">
					</div>
					<div class="layui-form-item">
						<div class="beg-pull-left">
							<button class="layui-btn layui-btn-primary" onclick="login()">
                <i class="layui-icon">&#xe650;</i> 登录
              </button>
						</div>
						<div class="beg-clear"></div>
					</div>
				</div>
			</div>
			<footer>
				<p></p>
			</footer>
		</div>
		<script type="text/javascript" src="__PUBLIC__/layui/layui.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.js"></script>
		<script>
			function login(){
				layui.use(['layer'],function(){
					var layer=layui.layer;
					$.ajax({
							type:"GET",
							async:false,
							data:{
									account:$("#userName").val(),
									password:$("#password").val(),
								},
							url:"http://localhost/weblog/index.php/Home/Login/login_check",
							dataType:"jsonp",
							jsonp:"jsonpCallback",
							success:function(data){
									if(data.errorcode==0){
										layer.msg(data.message);
										setTimeout(function(){
											location.href = "http://localhost/weblog/index.php/Home/Blog/index";
										},1000);
									}else{
											layer.msg(data.message);
									}
							},
					});
				});
			}
		</script>
	</body>
</html>
<?php }} ?>