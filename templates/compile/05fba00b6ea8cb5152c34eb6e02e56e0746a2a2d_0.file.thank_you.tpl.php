<?php /* Smarty version 3.1.27, created on 2015-11-26 16:49:15
         compiled from "D:\xampp\htdocs\hqv\templates\main\thank_you.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:290045656ffcb060549_43216997%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05fba00b6ea8cb5152c34eb6e02e56e0746a2a2d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\thank_you.tpl',
      1 => 1448542087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290045656ffcb060549_43216997',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5656ffcb0a33e3_80801259',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5656ffcb0a33e3_80801259')) {
function content_5656ffcb0a33e3_80801259 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '290045656ffcb060549_43216997';
?>
<h4><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(43);?>
, <?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getFirstName();?>
</h4>
<p>
<?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(44);?>

</p><?php }
}
?>