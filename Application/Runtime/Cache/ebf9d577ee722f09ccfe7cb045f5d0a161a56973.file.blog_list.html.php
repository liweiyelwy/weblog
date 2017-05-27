<?php /* Smarty version Smarty-3.1.6, created on 2017-04-17 17:35:20
         compiled from "./Application/Home/View\Blog\blog_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2209958f48b68a77761-07192468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebf9d577ee722f09ccfe7cb045f5d0a161a56973' => 
    array (
      0 => './Application/Home/View\\Blog\\blog_list.html',
      1 => 1492421718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2209958f48b68a77761-07192468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58f48b68aa91e',
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f48b68aa91e')) {function content_58f48b68aa91e($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>开始使用Layui</title>
  <link rel="stylesheet" href="<?php echo @LAYUI;?>
css/layui.css">
  <link rel="stylesheet" href="<?php echo @CSS;?>
blog_list.css">
</head>
<body>
 	<div class="layui-layout layui-layout-admin layui-main">
		<div class="layui-header">
			<ul class="layui-nav nav-left layui-layout-admin">
				<li class="layui-nav-item">后台管理</li>
				<li class="layui-nav-item">新增博客</li>
				<li class="layui-nav-item layui-this">博客列表</li>
				<li class="layui-nav-item">留言管理</li>
				<li class="layui-nav-item">1</li>
			</ul>
			<ul class="layui-nav nav-right">
				<li class="layui-nav-item">liweiye</li>
				<li class="layui-nav-item">注销/登录</li>
			</ul>
		</div>
		<hr>
		<table class="layui-table" lay-skin="line" lay-even>
			<colgroup>
				<col width="250">
				<col width="100">
				<col width="100">
				<col >
				<col width="141">
			</colgroup>
			<thead>
				<tr>
					<th>标题</th>
					<th>关键字</th>
					<th>时间</th>
					<th>简要概述</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>ss

        <foreach name="list" item="v" key="k">
				<tr>
					<th><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</th>
					<th><?php echo $_smarty_tpl->tpl_vars['v']->value['key'];?>
</th>
					<th><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
</th>
					<th><?php echo $_smarty_tpl->tpl_vars['v']->value['about'];?>
</th>
					<th>
						<div class="layui-btn-group">
						  <button class="layui-btn layui-btn-small">
							<i class="layui-icon">&#xe642;</i>
						  </button>
						  <button class="layui-btn layui-btn-small">
							<i class="layui-icon">&#xe640;</i>
						  </button>
						  <button class="layui-btn layui-btn-small">
							<i class="layui-icon">&#xe602;</i>
						  </button>
						</div>
					</th>
				</tr>
      </foreach>

			</tbody>
		</table>
	</div>
</body>

</html>
<?php }} ?>