<?php /* Smarty version 3.1.27, created on 2015-11-20 10:22:47
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\dashboard\statistics.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26802564ee667327b64_27403818%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '808cb82f9cf71d5af7ec23ecd1069e340cfabbb2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\dashboard\\statistics.tpl',
      1 => 1448011366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26802564ee667327b64_27403818',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564ee667342aa9_07444789',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ee667342aa9_07444789')) {
function content_564ee667342aa9_07444789 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26802564ee667327b64_27403818';
?>

<div class="row">
	<div class="col s12 m4 l4">
		<div class="card blue-grey darken-1">
			<div class="card-content white-text">
				<span class="card-title">countGroupByVoter: <span class="orange-text text-accent-2"><?php echo $_smarty_tpl->tpl_vars['ns']->value['countGroupByVoter'];?>
</span></span>
			</div>
			<div class="card-action">
			</div>
		</div>
	</div>
	<div class="col s12 m4 l4">
		<div class="card blue-grey darken-1">
			<div class="card-content white-text">
				<span class="card-title">nonParticipantCounts: <span class="orange-text text-accent-2"><?php echo $_smarty_tpl->tpl_vars['ns']->value['nonParticipantCounts'];?>
</span></span>
			</div>
			<div class="card-action">
			</div>
		</div>
	</div>
	<div class="col s12 m4 l4">
		<div class="card blue-grey darken-1">
			<div class="card-content white-text">
				<span class="card-title">ParticipantCounts: <span class="orange-text text-accent-2"><?php echo $_smarty_tpl->tpl_vars['ns']->value['participantCounts'];?>
</span></span>
			</div>
			<div class="card-action">
			</div>
		</div>
	</div>
</div>
<?php }
}
?>