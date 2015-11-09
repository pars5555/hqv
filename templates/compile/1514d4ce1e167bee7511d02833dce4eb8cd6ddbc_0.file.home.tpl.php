<?php /* Smarty version 3.1.27, created on 2015-11-02 08:24:12
         compiled from "D:\xampp\htdocs\ngs-framework\templates\main\home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1328456370f9cdb5a33_69256620%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1514d4ce1e167bee7511d02833dce4eb8cd6ddbc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ngs-framework\\templates\\main\\home.tpl',
      1 => 1446449051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1328456370f9cdb5a33_69256620',
  'variables' => 
  array (
    'ns' => 0,
    'SITE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56370f9cdf8ed0_81773879',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56370f9cdf8ed0_81773879')) {
function content_56370f9cdf8ed0_81773879 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1328456370f9cdb5a33_69256620';
?>
<div class="welcome">
  <h1>nested home load</h1>
  <?php if (isset($_smarty_tpl->tpl_vars['ns']->value['demoDto'])) {?>
  <h2>Hello <?php echo $_smarty_tpl->tpl_vars['ns']->value['demoDto']->getName();?>
</h2>
  <?php }?>
  <form action="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/main/do_convert">
  <button>Convert</button>
  </form>
</div>
<?php }
}
?>