<?php /* Smarty version 3.1.27, created on 2015-11-15 15:41:16
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:235275648998c961531_83755902%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd1dfe9e81d15893b85e634733d6af3aeae9c018' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\login.tpl',
      1 => 1447598474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235275648998c961531_83755902',
  'variables' => 
  array (
    'SITE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5648998c9f2d36_84036599',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5648998c9f2d36_84036599')) {
function content_5648998c9f2d36_84036599 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '235275648998c961531_83755902';
?>
<form action="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dologin" method="POST" autocomplete="off">
    <input type="text" name="username"/>
    <input type="password" name="password"/>
    <input type="submit" value="login"/>
</form><?php }
}
?>