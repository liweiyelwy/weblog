<?php /* Smarty version Smarty-3.1.6, created on 2016-12-22 11:00:31
         compiled from "./Application/Home/View\Index\indexpagae.html" */ ?>
<?php /*%%SmartyHeaderCode:31236585b40f1485f31-46952149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd54fb53b86bc5415d446080ba0fadfccd430a9de' => 
    array (
      0 => './Application/Home/View\\Index\\indexpagae.html',
      1 => 1482375629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31236585b40f1485f31-46952149',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_585b40f150082',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585b40f150082')) {function content_585b40f150082($_smarty_tpl) {?><!DOCTYPE html>
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
    <link rel="stylesheet" href="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/weui_master/dist/style/weui.css">

    <!-- 微信JS SDK -->
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <!-- 基础库 -->

    <!-- 扩展UI库 -->

</head>
<body ontouchstart="">
        <div class="campufix_login_header">
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


<div class="page__bd">
    <div class="weui-cells__title">快速维修</div>
</div>

<div class="weui-grids">
    <a href="/Order/Index" class="weui-grid">
        <div class="weui-grid__icon">
            <img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/xiadan.svg" alt="" />
        </div>
        <p class="weui-grid__label">
            维修下单
        </p>
    </a>
    <a href="/Home/OrderPool" class="weui-grid">
        <div class="weui-grid__icon">
            <img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/danchi.svg" alt="" />
        </div>
        <p class="weui-grid__label">
            订单池
        </p>
    </a>
    <a href="#" onclick="unfunction()" class="weui-grid">
        <div class="weui-grid__icon">
            <img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/baojia.svg" alt="" />
        </div>
        <p class="weui-grid__label">
            查询报价
        </p>
    </a>
    <a href="/Home/Flow" class="weui-grid">
        <div class="weui-grid__icon">
            <img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/liucheng.svg" alt="" />
        </div>
        <p class="weui-grid__label">
            维修流程
        </p>
    </a>
    <a href="/Home/CKeList" class="weui-grid">
        <div class="weui-grid__icon">
            <img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/paihang.svg" alt="" />
        </div>
        <p class="weui-grid__label">
            C客排行
        </p>
    </a>
    <a href="/Login/Login?type=store" class="weui-grid">
        <div class="weui-grid__icon">
            <img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/shangjia.svg" alt="" />
        </div>
        <p class="weui-grid__label">
            商家入驻
        </p>
    </a>
</div>

<div class="page__bd">
    <div class="weui-cells__title">其他</div>
</div>

<div class="weui-grids">

    <a href="/Home/Helper" class="weui-grid">
        <div class="weui-grid__icon">
            <img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/bangzhu.svg" alt="" />
        </div>
        <p class="weui-grid__label">
            帮助中心
        </p>
    </a>
    <a href="#" onclick="unfunction()" class="weui-grid">

        <div class="weui-grid__icon">
            <img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/jiaru.svg" alt="" />
        </div>
        <p class="weui-grid__label">
            加入我们
        </p>
    </a>
    <a href="#" onclick="unfunction()" class="weui-grid">

        <div class="weui-grid__icon">
            <img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/guanyu.svg" alt="" />
        </div>
        <p class="weui-grid__label">
            关于我们
        </p>
    </a>
    <a href="#" onclick="unfunction()" class="weui-grid">

        <div class="weui-grid__icon">
            <img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/me_tousu.svg" alt="" />
        </div>
        <p class="weui-grid__label">
            投诉建议
        </p>
    </a>
</div>

<script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&key=OIZBZ-255AF-5WBJL-JUVNN-V2NX6-QCBSD&libraries=autocomplete,convertor"></script>

<script>
    var islogin=false;
    var map, latitude, geocoder, longitude, address;
    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: 'wx9b1ae72a2b471843', // 必填，公众号的唯一标识
        timestamp: '1481877273', // 必填，生成签名的时间戳
        nonceStr: 'xessvlqtfufrzenstjtsihrtkmhqeccu', // 必填，生成签名的随机串
        signature: '86ea5a03b03db258375781d0b3e495bd1d24fee6',// 必填，签名，见附录1
        jsApiList: ['openLocation', 'getLocation'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
    });
    wx.ready(function () {
        wx.getLocation({
            type: 'gcj02', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'
            success: function (res) {
                latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
                longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180
                var speed = res.speed; // 速度，以米/每秒计
                var accuracy = res.accuracy; // 位置精度
                var center = new qq.maps.LatLng(latitude, longitude);
                geocoder = new qq.maps.Geocoder({
                    complete: function (result) {
                        address = result.detail.address;
                    }
                });
                geocoder.getAddress(center);
                setTimeout( setPosition,500);
                $("#ckelist").attr("href","/Home/CKeList?lng="+longitude+"&lat="+latitude);
            }
        });
    });
    function setPosition() {
        if (islogin) {
            $.post("/Home/SetPosition", { latitude: latitude, longitude: longitude, address: address }, function (data) {
                //console.log(data);
            });
        }
    };
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