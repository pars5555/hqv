<?php /* Smarty version 3.1.27, created on 2015-11-27 14:52:13
         compiled from "D:\xampp\htdocs\hqv\templates\main\util\header_control.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2583565835dd113e20_63263136%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '747a47f56068517cadbff33c13c166b92b922c7a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\util\\header_control.tpl',
      1 => 1448621523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2583565835dd113e20_63263136',
  'variables' => 
  array (
    'SITE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565835dd3fd875_36414171',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565835dd3fd875_36414171')) {
function content_565835dd3fd875_36414171 ($_smarty_tpl) {
if (!is_callable('smarty_function_ngs')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.ngs.php';

$_smarty_tpl->properties['nocache_hash'] = '2583565835dd113e20_63263136';
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Referendum</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/css/font-awesome.min.css" type="text/css" rel="stylesheet prefetch">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_ngs(array('cmd'=>'get_js_out_dir'),$_smarty_tpl);?>
/ngs.js?<?php echo smarty_function_ngs(array('cmd'=>'get_version'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_ngs(array('cmd'=>'get_js_out_dir'),$_smarty_tpl);?>
/ngs_loads.js?<?php echo smarty_function_ngs(array('cmd'=>'get_version'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_ngs(array('cmd'=>'get_js_out_dir'),$_smarty_tpl);?>
/ngs_actions.js?<?php echo smarty_function_ngs(array('cmd'=>'get_version'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/js/lib/materialize.js"><?php echo '</script'; ?>
>
<link href="<?php echo smarty_function_ngs(array('cmd'=>'get_css_out_dir'),$_smarty_tpl);?>
/styles.css?<?php echo smarty_function_ngs(array('cmd'=>'get_version'),$_smarty_tpl);?>
" type="text/css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/css/materialize.css" type="text/css" rel="stylesheet prefetch">

<?php }
}
?>