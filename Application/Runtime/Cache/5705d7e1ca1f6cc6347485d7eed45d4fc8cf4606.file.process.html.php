<?php /* Smarty version Smarty-3.1.6, created on 2016-12-15 16:38:13
         compiled from "./Application/Home/View\Index\process.html" */ ?>
<?php /*%%SmartyHeaderCode:27000585255e4613c46-94465848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5705d7e1ca1f6cc6347485d7eed45d4fc8cf4606' => 
    array (
      0 => './Application/Home/View\\Index\\process.html',
      1 => 1481791089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27000585255e4613c46-94465848',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_585255e465cc9',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585255e465cc9')) {function content_585255e465cc9($_smarty_tpl) {?><!DOCTYPE html>
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
    <div class="weui-pull-to-refresh-layer" id="down_loading_div" style="display:none;">
        <div class="pull-to-refresh-arrow"></div> <!-- 上下拉动的时候显示的箭头 -->
        <div class="pull-to-refresh-preloader"></div> <!-- 正在刷新的菊花 -->
        <div class="down" style="color:red;">下拉刷新</div><!-- 下拉过程显示的文案 -->
        <div class="up" style="color:green;">释放刷新</div><!-- 下拉超过50px显示的文案 -->
        <div class="refresh" style="color:blue;">正在刷新...</div><!-- 正在刷新时显示的文案 -->
    </div>
    <div class="weui_cells weui_cells_access" style="margin: 0 0 18px 0;">
            <div class="weui_cell" style="height: 35px;">
                    <div class="weui_cell_hd" onclick="javascript: window.location = '/Home/Index';">
                        <img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/back_index.svg" style="margin-right:18px;">
                    </div>
                <div class="weui_cell_bd weui_cell_primary" onclick="javascript: window.location = '/Login/Login';">
                    <p>登录后享受完整功能</p>
                </div>
                <div class="weui_cell_ft" onclick="javascript: window.location = '/Login/Login';">
                    登录/注册
                </div>
            </div>
    </div>


<div class="weui_panel weui_panel_access">
    <div class="weui_panel_hd">维修流程</div>
    <div class="weui_panel_bd">
        <div class="weui_media_box weui_media_appmsg">
            <div class="weui_media_hd">
                <img class="weui_media_appmsg_thumb" src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/fill_form.svg" alt="填写订单">
            </div>
            <div class="weui_media_bd">
                <h4 class="weui_media_title">1、填写订单</h4>
                <p class="weui_media_desc">选择您的设备进入不同的页面，根据自己的情况选填故障和青睐的维修方案。这一步也可以作为查询报价。如果有额外要求要记得写在备注框里，比如设备密码等。</p>
            </div>
        </div>
        <div class="weui_media_box weui_media_appmsg">
            <div class="weui_media_hd">
                <img class="weui_media_appmsg_thumb" src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/post_form.svg" alt="填写订单">
            </div>
            <div class="weui_media_bd">
                <h4 class="weui_media_title">2、提交订单</h4>
                <p class="weui_media_desc">填写校区和具体地址很重要，还有联系方式。不然我们可找不到你。提交订单我们才知道您需要服务哦，订单也是日后的凭据。</p>
            </div>
        </div>
        <div class="weui_media_box weui_media_appmsg">
            <div class="weui_media_hd">
                <img class="weui_media_appmsg_thumb" src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/person.svg" alt="填写订单">
            </div>
            <div class="weui_media_bd">
                <h4 class="weui_media_title">3、等待安排服务人员</h4>
                <p class="weui_media_desc">这个时候我们已经收到了您的订单，正在为您分配最优的服务人员，可能是校内大神C客与您联系，也可能是校园代理上门取机，或者，维修师直接上门维修。</p>
            </div>
        </div>
        <div class="weui_media_box weui_media_appmsg">
            <div class="weui_media_hd">
                <img class="weui_media_appmsg_thumb" src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/solve.svg" alt="填写订单">
            </div>
            <div class="weui_media_bd">
                <h4 class="weui_media_title">4、线下交接设备或上门维修</h4>
                <p class="weui_media_desc">这时候，你已经可以在订单列表中看到服务人员的联系方式，你们会相互联系约时间地点等，线下交接设备。请记住，我们的工作人员都会佩戴指定的工牌，且不会问您索要现金！支付都是在平台完成的。</p>
            </div>
        </div>
        <div class="weui_media_box weui_media_appmsg">
            <div class="weui_media_hd">
                <img class="weui_media_appmsg_thumb" src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/pay.svg" alt="填写订单">
            </div>
            <div class="weui_media_bd">
                <h4 class="weui_media_title">5、报价并支付</h4>
                <p class="weui_media_desc">维修师检测后会给出具体故障详情和报价，您需要提前支付，我们才会开始维修，若最终无法完成服务，放心我们会一定退给您。</p>
            </div>
        </div>
        <div class="weui_media_box weui_media_appmsg">
            <div class="weui_media_hd">
                <img class="weui_media_appmsg_thumb" src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/smile.svg" alt="填写订单">
            </div>
            <div class="weui_media_bd">
                <h4 class="weui_media_title">6、完成服务并交还设备</h4>
                <p class="weui_media_desc">C客或维修师完成服务后，就会将设备返还哒~取机到维修中心维修的设备会通过校园代理返还给您。您最好当面检查设备，查看维修情况以防止出现纰漏。</p>
            </div>
        </div>
        <div class="weui_media_box weui_media_appmsg">
            <div class="weui_media_hd">
                <img class="weui_media_appmsg_thumb" src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/remain.svg" alt="填写订单">
            </div>
            <div class="weui_media_bd">
                <h4 class="weui_media_title">7、评价并进入保修期</h4>
                <p class="weui_media_desc">您可以对本次服务进行评价，并且此刻开始您的设备将享受靠谱修提供的对应时长的保修期。</p>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="logo">
        <a href="/Home/Index"><img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/Public/img/TM_logo.png" width="258" height="54"></a>
    </div>
</div>




</body>
</html>
<?php }} ?>