<?php /* Smarty version Smarty-3.1.6, created on 2016-12-20 14:35:50
         compiled from "./Application/Home/View\Index\input.html" */ ?>
<?php /*%%SmartyHeaderCode:155815858d146e51665-43035589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef3d929ad908a565aaf630421a33139ab4aa4e49' => 
    array (
      0 => './Application/Home/View\\Index\\input.html',
      1 => 1482215736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155815858d146e51665-43035589',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5858d146eb433',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5858d146eb433')) {function content_5858d146eb433($_smarty_tpl) {?><html>
    <head><title>test</title></head>
    <body>
        <img src="<?php echo $_SERVER['ROOT'];?>
/thinkphp/index.php/Home/Index/verify">
        <form action="<?php echo $_SERVER['ROOT'];?>
/thinkphp/index.php/Home/Index/check" method="post">
            <input type="text" name="verify">
            <input type="submit" value="up">
        </form>
    </body>
</html>
<?php }} ?>