<?php /* Smarty version 3.1.27, created on 2015-11-22 22:17:39
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\dashboard\statistics.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17992565230f3b03208_36621484%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '808cb82f9cf71d5af7ec23ecd1069e340cfabbb2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\dashboard\\statistics.tpl',
      1 => 1448226937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17992565230f3b03208_36621484',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565230f3b2cee6_64369402',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565230f3b2cee6_64369402')) {
function content_565230f3b2cee6_64369402 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17992565230f3b03208_36621484';
?>

<div class="row">
	<div class="col s12 m4 l4">
		<div class="card blue-grey darken-1">
			<div class="card-content white-text">
				<span class="card-title">Total Participants & Non Participants: <span class="orange-text text-accent-2"><?php echo $_smarty_tpl->tpl_vars['ns']->value['countGroupByVoter'];?>
</span></span>
			</div>
			<div class="card-action">
			</div>
		</div>
	</div>
	<div class="col s12 m4 l4">
		<div class="card blue-grey darken-1">
			<div class="card-content white-text">
				<span class="card-title">Unique Non Participants: <span class="orange-text text-accent-2"><?php echo $_smarty_tpl->tpl_vars['ns']->value['nonParticipantCounts'];?>
</span></span>
			</div>
			<div class="card-action">
			</div>
		</div>
	</div>
	<div class="col s12 m4 l4">
		<div class="card blue-grey darken-1">
			<div class="card-content white-text">
				<span class="card-title">Unique Participant: <span class="orange-text text-accent-2"><?php echo $_smarty_tpl->tpl_vars['ns']->value['participantCounts'];?>
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