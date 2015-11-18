<?php /* Smarty version 3.1.27, created on 2015-11-17 19:14:12
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\passport\list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29443564b6e741b2b90_61294090%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0134ffec2dfe5bda09aea4cca693522774a444f9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\passport\\list.tpl',
      1 => 1447784047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29443564b6e741b2b90_61294090',
  'variables' => 
  array (
    'ns' => 0,
    'page' => 0,
    'row' => 0,
    'bd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564b6e742a4ca3_29594178',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564b6e742a4ca3_29594178')) {
function content_564b6e742a4ca3_29594178 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29443564b6e741b2b90_61294090';
?>
<div class="row">
    <div class="col s12 m6 6">
        <label for="p_page">Per Page</label>
        <select id="p_page" class="browser-default" <?php if ($_smarty_tpl->tpl_vars['ns']->value['pageCount'] <= 1) {?>disabled<?php }?>>
            <?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['ns']->value['pageCount']+1 - (1) : 1-($_smarty_tpl->tpl_vars['ns']->value['pageCount'])+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ns']->value['page'] == $_smarty_tpl->tpl_vars['page']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</option>
            <?php }} ?>
        </select>
    </div>
    <div class="col s12 m6 6">
        <label for="p_limit">Page Limit</label>
        <select id="p_limit" class="browser-default">
            <option value="20" <?php if ($_smarty_tpl->tpl_vars['ns']->value['limit'] == 20) {?>selected<?php }?>>20</option>
            <option value="50" <?php if ($_smarty_tpl->tpl_vars['ns']->value['limit'] == 50) {?>selected<?php }?>>50</option>
            <option value="100" <?php if ($_smarty_tpl->tpl_vars['ns']->value['limit'] == 100) {?>selected<?php }?>>100</option>
            <option value="500" <?php if ($_smarty_tpl->tpl_vars['ns']->value['limit'] == 500) {?>selected<?php }?>>500</option>
        </select>
    </div>
</div>
<table class="responsive-table real-voters">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Father Price</th>
            <th>Birth Date</th>
            <th>In List</th>
            <th>All Ok</th>
        </tr>
    </thead>
    <tbody id="real_voters_table">
        <?php
$_from = $_smarty_tpl->tpl_vars['ns']->value['rows'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
            <?php $_smarty_tpl->tpl_vars['bd'] = new Smarty_Variable(explode("-",$_smarty_tpl->tpl_vars['row']->value->getBirthDate()), null, 0);?> 
            <tr data-rowid="<?php echo $_smarty_tpl->tpl_vars['row']->value->getId();?>
" data-first-name="<?php echo $_smarty_tpl->tpl_vars['row']->value->getFirstName();?>
" data-last-name="<?php echo $_smarty_tpl->tpl_vars['row']->value->getLastName();?>
"
                data-father-name="<?php echo $_smarty_tpl->tpl_vars['row']->value->getFatherName();?>
" data-birth-year="<?php echo intval($_smarty_tpl->tpl_vars['bd']->value[0]);?>
" data-birth-month="<?php echo intval($_smarty_tpl->tpl_vars['bd']->value[1]);?>
"
                data-birth-day="<?php echo intval($_smarty_tpl->tpl_vars['bd']->value[2]);?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->getFirstName();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->getLastName();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->getFatherName();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->getBirthDate();?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['row']->value->getVoterId() > 0) {?>yes<?php } else { ?>no<?php }?></td>
                <td><?php if ($_smarty_tpl->tpl_vars['row']->value->getVoterId() > 0) {?>yes<?php } else { ?>no<?php }?></td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
    </tbody>
</table>    
<?php }
}
?>