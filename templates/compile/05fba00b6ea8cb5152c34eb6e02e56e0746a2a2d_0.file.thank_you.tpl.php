<?php /* Smarty version 3.1.27, created on 2015-11-26 15:33:41
         compiled from "D:\xampp\htdocs\hqv\templates\main\thank_you.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:260155656ee15bd7a87_73211680%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05fba00b6ea8cb5152c34eb6e02e56e0746a2a2d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\thank_you.tpl',
      1 => 1447657272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260155656ee15bd7a87_73211680',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5656ee15c0d598_95452337',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5656ee15c0d598_95452337')) {
function content_5656ee15c0d598_95452337 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '260155656ee15bd7a87_73211680';
?>
<h4>Thank you <?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getFirstName();?>
</h4>
<p>
message...
</p><?php }
}
?>