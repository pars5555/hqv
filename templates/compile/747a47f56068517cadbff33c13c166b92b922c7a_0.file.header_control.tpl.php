<?php /* Smarty version 3.1.27, created on 2015-11-29 13:38:41
         compiled from "D:\xampp\htdocs\hqv\templates\main\util\header_control.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26574565ac7a12b59a0_97426104%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '747a47f56068517cadbff33c13c166b92b922c7a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\util\\header_control.tpl',
      1 => 1448788539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26574565ac7a12b59a0_97426104',
  'variables' => 
  array (
    'ns' => 0,
    'SITE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565ac7a13bd132_33434839',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565ac7a13bd132_33434839')) {
function content_565ac7a13bd132_33434839 ($_smarty_tpl) {
if (!is_callable('smarty_function_ngs')) require_once 'D:\\xampp\\htdocs\\hqv\\classes\\framework\\lib\\smarty\\plugins\\function.ngs.php';

$_smarty_tpl->properties['nocache_hash'] = '26574565ac7a12b59a0_97426104';
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(35);?>
" />
<meta name="keywords" content="Hanraqve, Hanrakve, Հանրաքվե"/>
<title><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(1);?>
</title>
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

<?php echo '<script'; ?>
>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70814215-1', 'auto');
  ga('send', 'pageview');

<?php echo '</script'; ?>
>

<?php }
}
?>