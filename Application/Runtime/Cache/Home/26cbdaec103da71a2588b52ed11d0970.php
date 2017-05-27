<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>开始使用Layui</title>
  <link rel="stylesheet" href="<?php echo ($smarty["const"]["LAYUI"]); ?>css/layui.css">
  <link rel="stylesheet" href="<?php echo ($smarty["const"]["CSS"]); ?>blog_list.css">
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
			<tbody>

        <?php if(is_array($list)): foreach($list as $k=>$v): ?><tr>
					<th><?php echo ($v["title"]); ?></th>
					<th><?php echo ($v["key"]); ?></th>
					<th><?php echo ($v["time"]); ?></th>
					<th><?php echo ($v["about"]); ?></th>
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
				</tr><?php endforeach; endif; ?>

			</tbody>
		</table>
	</div>
</body>

</html>