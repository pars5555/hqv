<?php /* Smarty version 3.1.27, created on 2015-11-16 13:55:16
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\util\header_control.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:97745649d2348bd469_89972423%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aa9586b9254c7c2633f8ba4eaa8bdd79e9358d6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\util\\header_control.tpl',
      1 => 1447657271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97745649d2348bd469_89972423',
  'variables' => 
  array (
    'SITE_PATH' => 0,
    'VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5649d2348cc3e5_45611328',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5649d2348cc3e5_45611328')) {
function content_5649d2348cc3e5_45611328 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '97745649d2348bd469_89972423';
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