<?php /* Smarty version Smarty-3.1.6, created on 2016-12-17 14:36:58
         compiled from "./Application/Home/View\Index\helper.html" */ ?>
<?php /*%%SmartyHeaderCode:249595852582b26c912-26853972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4bea6f43245a47c3d7c2012bf862421df488aec' => 
    array (
      0 => './Application/Home/View\\Index\\helper.html',
      1 => 1481956616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249595852582b26c912-26853972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5852582b2de60',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5852582b2de60')) {function content_5852582b2de60($_smarty_tpl) {?><!DOCTYPE html>
<html style="background-color: #F5F5F5; ">
<head>
    <meta name="description" content="CAMPUFIX靠谱修，专注于高校手机、电脑的维修维护平台。做大学生值得信赖的维修品牌。" />
    <meta name="keywords" content="手机维修, 电脑维修, 校园维修, 维修, campufix, 靠谱修, 校园, 电脑, 手机, 高校, C客, 大学维修, 维修界的抢单平台" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta name="format-detection" content="telephone=no">
    <title>CAMPUFIX靠谱修</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen" />
    <!-- WEUI -->
    <script src="/Content/WEUI/jquery.min.js"></script>
    <link href="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/weui-master/dist/style/weui.min.css" rel="stylesheet" />
    <link href="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/css/weui.expand.css" rel="stylesheet" />
    <!-- <script src="/Content/WEUI/weui.expand.js"></script> -->
    <!-- 微信JS SDK -->
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <!-- 基础库 -->
    <!-- <script src="/Content/Assembly/dictionary.js"></script>
    <script src="/Content/Assembly/ajaxfileupload.js"></script>
    <script src="/Content/Assembly/cookie.js"></script>
    <script src="/Content/Assembly/verify.js"></script>
    <script src="/Content/Assembly/datetime.js"></script> -->
    <!-- 扩展UI库 -->
    <link rel="stylesheet" href="<?php echo $_SERVER;?>
/thinkphp/Public/css/header_footer.css"/>
</head>
<body ontouchstart="">
        <div class="campufix_login_header">
                <div class="campufix_houtui campufix_login_svg" onclick="javascript: window.location = '/Home/Index?type=index';">
                    <img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/houtui.svg" alt="" />
                </div>
            <div class="campufix_content" onclick="javascript: window.location = '/Login/Login';">
                登录享受完整功能
            </div>
            <div class="campufix_qianjin campufix_login_svg" onclick="javascript: window.location = '/Login/Login';">
                <img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/qianjin.svg" alt="" />
            </div>
            <div class="campufix_login" onclick="javascript: window.location = '/Login/Login';">
                登录/注册
            </div>
        </div>


<div class="weui-panel">
    <div class="weui-panel__hd">常见问题</div>
    <div class="weui-panel__bd">
        <div class="weui-media-box weui-media-box_small-appmsg">
            <div class="weui-cells">
                <a class="weui-cell weui-cell_access" href="javascript:;">
                    <div class="weui-cell__bd weui-cell_primary">
                        <p>订单提交却无人响应怎么办？</p>
                    </div>
                    <span class="weui-cell__ft"></span>
                </a>
                <div class="weui-cells weui-cells_form" style="display:none">
                    <div class="weui-cell">
                        <div class="weui-cell__bd weui-cell_primary">
                            <textarea class="weui-textarea" rows="3" placeholder="如果出现此情况，请联系订单里的相关人员，或联系本校的校园合伙人进行咨询。" readonly="true"></textarea>
                        </div>
                    </div>
                </div>
                <a class="weui-cell weui-cell_access" href="javascript:;">
                    <div class="weui-cell__bd weui-cell_primary">
                        <p>为什么要先支付订单才开始修？</p>
                    </div>
                    <span class="weui-cell__ft"></span>
                </a>
                <div class="weui-cells weui-cells_form" style="display:none">
                    <div class="weui-cell">
                        <div class="weui-cell__bd weui-cell_primary">
                            <textarea class="weui-textarea" rows="6" placeholder="如果订单出现支付按钮，证明C客或维修师已经检测完毕，可以尝试进行维修了。此时需要确认您的态度，接受维修则继续，不维修则可以取消订单。这样可以避免一些不必要的人力物力浪费。如果之后没有维修完成，则可根据订单申请退款。" readonly="true"></textarea>
                        </div>
                    </div>
                </div>
                <a class="weui-cell weui-cell_access" href="javascript:;">
                    <div class="weui-cell__bd weui-cell_primary">
                        <p>质保政策是怎样的？</p>
                    </div>
                    <span class="weui-cell__ft"></span>
                </a>
                <div class="weui-cells weui-cells_form" style="display:none">
                    <div class="weui-cell">
                        <div class="weui-cell__bd weui-cell_primary">
                            <textarea class="weui-textarea" rows="7" placeholder="手机换屏，质保期通常是30天，其他手机零件质保期通常是60天。电脑主板故障质保30天，换新配件质保三个月到一年时间不等。具体保修时长请参考质检报告或咨询维修师。注意，质保通常适用于非人为损坏，且正常使用情况下，同一故障点再次出现相同的故障。" readonly="true"></textarea>
                        </div>
                    </div>
                </div>
                <a class="weui-cell weui-cell_access" href="javascript:;">
                    <div class="weui-cell__bd weui-cell_primary">
                        <p>如何备份手机的资料？</p>
                    </div>
                    <span class="weui-cell__ft"></span>
                </a>
                <div class="weui-cells weui-cells_form" style="display:none">
                    <div class="weui-cell">
                        <div class="weui-cell__bd weui-cell_primary">
                            <textarea class="weui-textarea" rows="9" placeholder="iPhone用户可以在电脑端安装爱思助手或其他助手，这个软件会提示你下载安装iTunes，安装完之后插上数据线连接手机和电脑，软件会识别设备，并可以在电脑端操作备份联系人、短信、照片等。安卓用户可以通过各种刷机工具或360手机助手等，连接电脑后也可以备份联系人、照片等资料。以上备份都建立在设备可以开机，能被电脑正常识别的情况下，建议大家可以通过一些云盘，常常做一些云备份，这样有保障一些。" readonly="true"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="weui-panel">
    <div class="weui-panel__hd">靠谱修官方客服</div>
    <div class="weui-panel__bd">
        <div class="weui-media-box weui-media-box_text">
            <h4 class="weui-media-box__title">客服微信号</h4>
            <p class="weui-media-box__desc" style="line-height: 20px;">靠谱大师兄：13046367636</p>
            <p class="weui-media-box__desc" style="line-height: 30px;">添加以上号码为微信好友即可在线咨询</p>
            <ul class="weui-media-box__info">
                <li class="weui-media-box__info__meta">可进行图片、文字、语音、视频交流</li>
            </ul>
        </div>
        <div class="weui-media-box weui_media-box_text">
            <h4 class="weui-media-box__title">客服电话</h4>
            <p class="weui-media-box__desc"><a href="tel:13046367636">13046367636</a></p>
            <ul class="weui-media-box__info">
                <li class="weui-media-box__info__meta">电话联系</li>
                <li class="weui-media-box__info__meta">8点-22点</li>
            </ul>
        </div>
    </div>
</div>

<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">
    $(".weui-cells").find("a").eq(0).on("click", function () {
        $(".weui-cells").find(".weui-cells.weui-cells_form").eq(0).toggle();
    });
    $(".weui-cells").find("a").eq(1).on("click", function () {
        $(".weui-cells").find(".weui-cells.weui-cells_form").eq(1).toggle();
    });
    $(".weui-cells").find("a").eq(2).on("click", function () {
        $(".weui-cells").find(".weui-cells.weui-cells_form").eq(2).toggle();
    });
    $(".weui-cells").find("a").eq(3).on("click", function () {
        $(".weui-cells").find(".weui-cells.weui-cells_form").eq(3).toggle();
    });
</script>



<style>
    .footer_logo {
        position: relative;
        width: 258px;
        height: 54px;
        margin: 20px auto;
    }
</style>
<div class="footer" style="margin-top: 60px;">
    <div class="footer_logo">
        <a href="/Home/Index?type=index"><img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/TM_logo.png" width="258" height="54"></a>
    </div>
</div>

<div class="weui-footer" style="margin-bottom:10px;">
    <p class="weui-footer__links">
        <a href="/Home/Index?type=index" class="weui-footer__link">返回首页</a>
    </p>
    <p class="weui-footer__text">campufix.com &copy; 2015 粤ICP证xxxxxx </p>
</div>

<script>
    function unfunction() {
        dialog.open({ content: "此功能暂未开放", confirm: "我知道了" });
    };
</script>

</body>
</html>
<?php }} ?>