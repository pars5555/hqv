<?php /* Smarty version 3.1.27, created on 2015-11-20 09:27:03
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\number\add_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30053564ed957b69c53_70041685%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36de427e7bede281fea60e6feee3aaabdb48e3bc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\number\\add_edit.tpl',
      1 => 1448007876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30053564ed957b69c53_70041685',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564ed957b72511_36255366',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ed957b72511_36255366')) {
function content_564ed957b72511_36255366 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30053564ed957b69c53_70041685';
?>
<div class="row">
    <div class="input-field col s12 m4 4">
        <input placeholder="Voter Number" type="number" id="voterNumber" value="<?php echo $_smarty_tpl->tpl_vars['ns']->value['voterNumber'];?>
"/>
        <label class="active" for="voterNumber">Voter Number</label>
    </div>  
   
</div>
<div class="row">
    <input type="hidden" id="editRowId" value="<?php if ($_smarty_tpl->tpl_vars['ns']->value['edit'] == 1) {
echo $_smarty_tpl->tpl_vars['ns']->value['row_id'];
}?>"/>
    <p id="addVoterError" class="red-text text-darken-4 center-align"></p>
    <input class="btn col s12 m12 12" type="submit" value="<?php if ($_smarty_tpl->tpl_vars['ns']->value['edit'] == 1) {?>Save<?php } else { ?>Add<?php }?>"/>
</div>
<?php if ($_smarty_tpl->tpl_vars['ns']->value['edit'] == 1) {?>
    <div class="row">
        <a class="btn col s12 m12 12" id="cancelEditButton" href ="javascript:void(0);" >Cancel</a>
    </div>
<?php }
}
}
?>