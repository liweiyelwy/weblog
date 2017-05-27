<?php /* Smarty version Smarty-3.1.6, created on 2016-12-17 11:53:52
         compiled from "./Application/Home/View\Index\inde.html" */ ?>
<?php /*%%SmartyHeaderCode:293945854b6d0d6bcf8-39731929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9837219d114cca5db6be3dc4905624f649366120' => 
    array (
      0 => './Application/Home/View\\Index\\inde.html',
      1 => 1481946709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293945854b6d0d6bcf8-39731929',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5854b6d0dee53',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5854b6d0dee53')) {function content_5854b6d0dee53($_smarty_tpl) {?>




<!DOCTYPE html>
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

    <!-- 微信JS SDK -->
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

</head>
<body ontouchstart="">
        <div class="campufix_login_header">
                <div class="campufix_houtui campufix_login_svg" onclick="javascript: window.location = '';">
                    <img src="/Content/Svg/houtui.svg" alt="" />
                </div>
            <div class="campufix_content" onclick="javascript: window.location = '/Login/Login';">
                登录享受完整功能
            </div>
            <div class="campufix_qianjin campufix_login_svg" onclick="javascript: window.location = '/Login/Login';">
                <img src="/Content/Svg/qianjin.svg" alt="" />
            </div>
            <div class="campufix_login" onclick="javascript: window.location = '/Login/Login';">
                登录/注册
            </div>
        </div>


<div class="weui-cells__title">登录</div>
<div class="weui-cells weui-cells_form">
    <div class="weui-cell">
        <div class="weui-cell__hd">
            <label class="weui-label">手机号</label>
        </div>
        <div class="weui-cell__bd">
            <input id="account" class="weui-input" type="number" pattern="[0-9]*" placeholder="请输入手机号" />
        </div>
    </div>
    <div class="weui-cell weui-cell_vcode">
        <div class="weui-cell__hd">
            <label class="weui-label">安全验证码</label>
        </div>
        <div class="weui-cell__bd">
            <input id="numbercode" class="weui-input" type="number" pattern="[0-9]*" placeholder="安全验证码">
        </div>
        <div class="weui-cell__ft">
        </div>
    </div>
    <div class="weui-cell weui-cell_vcode">
        <div class="weui-cell__hd">
            <label class="weui-label">短信验证码</label>
        </div>
        <div class="weui-cell__bd">
            <input id="smscode" class="weui-input" type="number" pattern="[0-9]*" placeholder="短信验证码">
        </div>
        <div class="weui-cell__ft">
            <a href="javascript:;" style="width:107px;text-align:center;" id="send_code" onclick="onclick_sendcode()" class="weui-vcode-btn">获取验证码</a>
        </div>
    </div>
</div>

<div class="weui-btn-area">
    <a onclick="onclick_login()" class="weui-btn weui-btn_primary" href="javascript:" id="showTooltips">登录</a>
</div>

<script>
    $(function () {
        var cookie_account = getCookie("campufix_3_login_account");
        if (cookie_account != null && cookie_account != "" && cookie_account != undefined) {
            $("#account").val(cookie_account);
        }
    });

    function getnumbercode() {
        $.post("/Login/RefreshCode", { type: "l" }, function (data) {
            var json = eval(data);
            if (json.Code == 0) {
                $("#numbercodeimg").attr("src", "data:img/jpg;base64," + json.Data);
            } else {
                dialog.open({ content: json.Content });
            }
        });
    };

    var timeout_seconds;
    function overtime() {
        if (timeout_seconds > 0) {
            $("#send_code").html("发送（" + timeout_seconds + "S）");
            timeout_seconds--;
            setTimeout(overtime, 1000);
        }
        else {
            $("#send_code").attr("onclick", "onclick_sendcode()").removeClass("weui_btn_disabled");
            $("#send_code").html("发送");
        }
    };

    function onclick_sendcode() {
        var account = $("#account").val();
        var numbercode = $("#numbercode").val();
        if (account != "") {
            if (numbercode != "") {
                if (verifyphone(account)) {
                    $.post("/Login/LoginSendCode", { account: account, code: numbercode }, function (data) {
                        var json = eval(data);
                        if (json.Code == 0) {
                            timeout_seconds = 120;
                            $("#send_code").attr("onclick", "").addClass("weui_btn_disabled");
                            setTimeout(overtime, 1000);
                            getnumbercode();
                        } else {
                            dialog.open({ content: json.Content });
                            getnumbercode();
                        }
                    });
                } else {
                    dialog.open({ content: "手机号码错误" });
                    getnumbercode();
                }
            }
            else {
                dialog.open({ content: "安全验证码不能为空" });
                getnumbercode();
            }
        } else {
            dialog.open({ content: "手机号码不能为空" });
            getnumbercode();
        }
    };
    function onclick_login() {
        var account = $("#account").val();
        var smscode = $("#smscode").val();
        setCookie("campufix_3_login_account", account);
        if (verifyphone(account)) {
            if (smscode != "") {
                $.post("/Login/LoginAjax", { account: account, code: smscode }, function (data) {
                    var json = eval(data);
                    if (json.Code == 0) {
                        window.location = json.Content;
                    } else {
                        dialog.open({ content: json.Content });
                    }
                });
            } else {
                dialog.open({ content: "短信验证码不能为空" });
            }
        } else {
            dialog.open({ content: "手机号码错误" });
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
        <a href="/Home/Index?type=index"><img src="/Content/Images/TM_logo.png" width="258" height="54"></a>
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