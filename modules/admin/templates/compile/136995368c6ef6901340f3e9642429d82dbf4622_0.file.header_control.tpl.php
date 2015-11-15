<?php /* Smarty version 3.1.27, created on 2015-11-15 11:16:37
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\main\util\header_control.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2197856485b8598ab48_00353735%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136995368c6ef6901340f3e9642429d82dbf4622' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\main\\util\\header_control.tpl',
      1 => 1447582596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2197856485b8598ab48_00353735',
  'variables' => 
  array (
    'SITE_PATH' => 0,
    'VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56485b859ba743_50141847',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56485b859ba743_50141847')) {
function content_56485b859ba743_50141847 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2197856485b8598ab48_00353735';
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Referendum</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/css/font-awesome.min.css" type="text/css" rel="stylesheet prefetch">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/js/out/ngs.js?<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/js/out/ngs_loads.js?<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/js/out/ngs_actions.js?<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/js/lib/materialize.js"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/css/out/styles.css" type="text/css" rel="stylesheet prefetch">
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/css/materialize.css" type="text/css" rel="stylesheet prefetch">
<?php }
}
?>