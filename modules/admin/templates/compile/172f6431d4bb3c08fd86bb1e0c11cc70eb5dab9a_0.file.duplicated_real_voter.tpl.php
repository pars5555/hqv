<?php /* Smarty version 3.1.27, created on 2015-11-22 22:17:49
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\numanalyze\duplicated_real_voter.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:32500565230fd320d53_15736186%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '172f6431d4bb3c08fd86bb1e0c11cc70eb5dab9a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\numanalyze\\duplicated_real_voter.tpl',
      1 => 1448204556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32500565230fd320d53_15736186',
  'variables' => 
  array (
    'ns' => 0,
    'prevoteRow' => 0,
    'row' => 0,
    'areaId' => 0,
    'area' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565230fd36b292_97516111',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565230fd36b292_97516111')) {
function content_565230fd36b292_97516111 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32500565230fd320d53_15736186';
if ($_smarty_tpl->tpl_vars['ns']->value['voter_id'] > 0) {?>
    In List<br>
    voter index in list: <?php echo $_smarty_tpl->tpl_vars['ns']->value['voter']->getNumber();?>
<br>    
    <?php echo $_smarty_tpl->tpl_vars['ns']->value['area']->getRegion();?>
 <?php echo $_smarty_tpl->tpl_vars['ns']->value['area']->getCommunity();?>
 <?php echo $_smarty_tpl->tpl_vars['ns']->value['area']->getAddress();?>
<br>
    pre vote:<br>
    <?php if (!empty($_smarty_tpl->tpl_vars['ns']->value['prevoteData'])) {?>
        <?php
$_from = $_smarty_tpl->tpl_vars['ns']->value['prevoteData'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['prevoteRow'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['prevoteRow']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['prevoteRow']->value) {
$_smarty_tpl->tpl_vars['prevoteRow']->_loop = true;
$foreach_prevoteRow_Sav = $_smarty_tpl->tpl_vars['prevoteRow'];
?>
            <?php if ($_smarty_tpl->tpl_vars['prevoteRow']->value->getWillVote() == 1) {?>Will Participant em<?php } else { ?>Will not Participant<?php }?> <?php echo $_smarty_tpl->tpl_vars['prevoteRow']->value->getDatetime();?>
<br> 
        <?php
$_smarty_tpl->tpl_vars['prevoteRow'] = $foreach_prevoteRow_Sav;
}
?>
    <?php } else { ?>
        No Data
    <?php }?>
<?php }?>
<br>

<?php
$_from = $_smarty_tpl->tpl_vars['ns']->value['duplidatedRows'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
    <?php $_smarty_tpl->tpl_vars['areaId'] = new Smarty_Variable($_smarty_tpl->tpl_vars['row']->value->getAreaId(), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['area'] = new Smarty_Variable($_smarty_tpl->tpl_vars['ns']->value['areasMappedById'][$_smarty_tpl->tpl_vars['areaId']->value], null, 0);?>
    <?php echo $_smarty_tpl->tpl_vars['row']->value->getFirstName();?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->getLastName();?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->getFatherName();?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->getBirthDate();?>
 
    <br>
    <?php echo $_smarty_tpl->tpl_vars['area']->value->getRegion();?>
 <?php echo $_smarty_tpl->tpl_vars['area']->value->getCommunity();?>
 <?php echo $_smarty_tpl->tpl_vars['area']->value->getAddress();?>
 [<?php echo $_smarty_tpl->tpl_vars['row']->value->getCreateDatetime();?>
]
    <br>
    <br>
<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
}
}
?>