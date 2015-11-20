<?php /* Smarty version 3.1.27, created on 2015-11-20 18:56:37
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\dashboard\area_statistics.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13737564f5ed5290c91_76884306%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47a12f0f895b2f089ac33fb2d4d3728d8b8be0d6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\dashboard\\area_statistics.tpl',
      1 => 1448041893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13737564f5ed5290c91_76884306',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564f5ed5358b14_86180116',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564f5ed5358b14_86180116')) {
function content_564f5ed5358b14_86180116 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13737564f5ed5290c91_76884306';
?>
<div class="row">
	<div class='col s12'>
		<h5 class="left-align">Voters Count: <?php echo $_smarty_tpl->tpl_vars['ns']->value['areaPassportVotersCount'];?>
</h5>
	</div>
</div>
<?php }
}
?>