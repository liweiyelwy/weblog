<?php /* Smarty version Smarty-3.1.6, created on 2017-04-18 10:15:38
         compiled from "./Application/Home/View\Blog\index.html" */ ?>
<?php /*%%SmartyHeaderCode:8685896c11ba81ef3-41219095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03a41568683bcbc01904e4dc86da4a333fcde8fe' => 
    array (
      0 => './Application/Home/View\\Blog\\index.html',
      1 => 1492478401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8685896c11ba81ef3-41219095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5896c11baf7c6',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5896c11baf7c6')) {function content_5896c11baf7c6($_smarty_tpl) {?><html>
<head>
    <title>博客编辑</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="__PUBLIC__/layui/css/layui.css">
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="__PUBLIC__/layui/layui.js"></script>
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/ueditor/lang/zh-cn/zh-cn.js"></script>

    <style type="text/css">
        /*div{
            width:100%;
            margin: 0px auto;
        }*/
        .display_none{
            display: none;
        }
        .display_block{
            display: block;
        }
        .layui-nav-item{
          margin: 0 40px;
        }
    	  .nav-left{
          float: left;
        }
    	  .nav-right{
          float: right;
        }
        .edit{
          min-height: 100px;
          height: auto;
          padding: 6px 10px;
          resize: vertical;
          display: block;
          width: 100%;
        }
    </style>
</head>
<body>
<div class="display_none tip" id="tip">

</div>
<div class="layui-layout layui-layout-admin layui-main">
		<div class="layui-header">
			<ul class="layui-nav nav-left layui-layout-admin">
				<li class="layui-nav-item">后台管理</li>
				<li class="layui-nav-item layui-this">新增博客</li>
				<li class="layui-nav-item">博客列表</li>
				<li class="layui-nav-item">留言管理</li>
				<li class="layui-nav-item">1</li>
			</ul>
			<ul class="layui-nav nav-right">
				<li class="layui-nav-item">liweiye</li>
				<li class="layui-nav-item">注销/登录</li>
			</ul>
		</div>
		<hr>
		<div class="form">
			<div class="layui-form-item">
				<label class="layui-form-label">请输入标题</label>
				<div class="layui-input-block">
					<input type="text" id="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input" />
				</div>
			</div>
      <div class="layui-form-item">
				<label class="layui-form-label">请输作者</label>
				<div class="layui-input-block">
					<input type="text" id="author" required  lay-verify="required" placeholder="请输作者" autocomplete="off" class="layui-input" />
				</div>
			</div>
			<div class="layui-form-item">
				<label class="layui-form-label">请输关键字</label>
				<div class="layui-input-block">
					<input type="text" id="key" required  lay-verify="required" placeholder="请输关键字" autocomplete="off" class="layui-input" />
				</div>
			</div>
			<div class="layui-form-item layui-form-text">
				<label class="layui-form-label">输入内容概述</label>
				<div class="layui-input-block">
				  <textarea id="about" placeholder="请输入内容" class="layui-textarea"></textarea>
				</div>
			 </div>
			<div class="layui-form-item layui-form-text">
				<label class="layui-form-label">编辑博客内容</label>
				<div class="layui-input-block">
				  <script id="editor" class="layui-textarea" type="text/plain" style="height:300px;padding:0px;boder:none;"></script>
				</div>
			 </div>
			 <div class="layui-form-item">
				<div class="layui-input-block">
				  <button class="layui-btn" lay-submit onclick="getContent()">立即提交</button>
				</div>
			  </div>
		</div>
	</div>


<div>
    <script id="editor" type="text/plain" style="width:1000px;height:400px;"></script>
</div>
<!-- <div id="btns">
    <div>
        <button onclick="getContent()">发表文章</button>
        <!- - <button onclick="setContent()">写入内容</button> -->
    <!-- </div> -->

    <!-- <div>
        <button onclick="getText()">获得当前选中的文本</button>
        <button onclick="insertHtml()">插入给定的内容</button>
        <button id="enable" onclick="setEnabled()">可以编辑</button>
        <button onclick="setDisabled()">不可编辑</button>
        <button onclick=" UE.getEditor('editor').setHide()">隐藏编辑器</button>
        <button onclick=" UE.getEditor('editor').setShow()">显示编辑器</button>
        <button onclick=" UE.getEditor('editor').setHeight(300)">设置高度为300默认关闭了自动长高</button>
    </div>

    <div>
        <button onclick="getLocalData()" >获取草稿箱内容</button>
        <button onclick="clearLocalData()" >清空草稿箱</button>
    </div> -->
<!-- </div> -->
<!-- <div>
    <button onclick="createEditor()">
    创建编辑器</button>
    <button onclick="deleteEditor()">
    删除编辑器</button>
</div> -->

<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');

    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
      layui.use(['layer'],function(){
        var layer=layui.layer;
        $.ajax({
            type:"GET",
            async:false,
            data:{
                title:$("#title").val(),
                key:$("#key").val(),
                about:$("#about").val(),
                author:$("#author").val(),
                detail:UE.getEditor('editor').getContent(),
            },
            url:"http://localhost/weblog/index.php/Home/Blog/new_blog",
            dataType:"jsonp",
            jsonp:"jsonpCallback",
            success:function(data){
                if(data.errorcode==0){
                    layer.msg(data.message);
                    //window.location.href="http://localhost/weblog/index.php/Home/Blog/blog_list"
                }else{
                    layer.msg(data.message);
                }
            },
            error:function(jqXHR){
                layer.msg(jqXHR.status);
            }
        });

      });

    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }


</script>
</body>
</html>
<?php }} ?>