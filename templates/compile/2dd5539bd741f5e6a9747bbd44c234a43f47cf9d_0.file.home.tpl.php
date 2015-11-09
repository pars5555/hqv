<?php /* Smarty version 3.1.23, created on 2015-07-19 17:16:50
         compiled from "D:/xampp/htdocs/ngs-framework/templates/main/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:210955abbf62a0bbf0_30453736%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dd5539bd741f5e6a9747bbd44c234a43f47cf9d' => 
    array (
      0 => 'D:/xampp/htdocs/ngs-framework/templates/main/home.tpl',
      1 => 1432656501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210955abbf62a0bbf0_30453736',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_55abbf62a10436_35855089',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55abbf62a10436_35855089')) {
function content_55abbf62a10436_35855089 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '210955abbf62a0bbf0_30453736';
?>
<div class="welcome">
  <h1>nested home load</h1>
  <h2>Hello <?php echo $_smarty_tpl->tpl_vars['ns']->value['demoDto']->getName();?>
</h2>
</div>
<?php }
}
?>