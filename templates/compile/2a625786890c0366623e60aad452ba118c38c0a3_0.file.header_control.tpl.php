<?php /* Smarty version 3.1.27, created on 2015-11-09 10:12:24
         compiled from "D:\xampp\htdocs\hqv\templates\main\header_control.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2269256406378237358_41277142%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a625786890c0366623e60aad452ba118c38c0a3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\header_control.tpl',
      1 => 1446449725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2269256406378237358_41277142',
  'variables' => 
  array (
    'SITE_PATH' => 0,
    'VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56406378243bf6_39371605',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56406378243bf6_39371605')) {
function content_56406378243bf6_39371605 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2269256406378237358_41277142';
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Referendum</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/css/out/styles.css" type="text/css" rel="stylesheet prefetch">
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
><?php }
}
?>