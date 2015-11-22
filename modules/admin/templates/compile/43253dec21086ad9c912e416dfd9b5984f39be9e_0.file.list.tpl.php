<?php /* Smarty version 3.1.27, created on 2015-11-22 16:04:33
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\passanalyze\list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31685651d9813ad456_76372524%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43253dec21086ad9c912e416dfd9b5984f39be9e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\passanalyze\\list.tpl',
      1 => 1448204556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31685651d9813ad456_76372524',
  'variables' => 
  array (
    'ns' => 0,
    'page' => 0,
    'row' => 0,
    'voter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5651d9813e24d5_81317737',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5651d9813e24d5_81317737')) {
function content_5651d9813e24d5_81317737 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31685651d9813ad456_76372524';
?>
<div class="row">
    <div class="col s12 m6 6">
        <label for="p_page">Page</label>
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
            <th>Vote Count</th>
            <th>In List</th>
            <th>In Area List</th>
            <th>Duplication</th>
            <th>PreVote Match</th>
            <th>invalid?</th>
        </tr>
    </thead>
    <tbody id="real_duplicated_voters_table">
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
            <?php if ($_smarty_tpl->tpl_vars['row']->value->getVoterId() > 0) {?>
                <?php $_smarty_tpl->tpl_vars['voter'] = new Smarty_Variable($_smarty_tpl->tpl_vars['ns']->value['voters'][$_smarty_tpl->tpl_vars['row']->value->getVoterId()], null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['voter'] = new Smarty_Variable(0, null, 0);?>
            <?php }?>
            <tr data-rowids="<?php echo $_smarty_tpl->tpl_vars['row']->value->getDuplicationIds();?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->getFirstName();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->getLastName();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->getFatherName();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->getBirthDate();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->getVoteCount();?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['row']->value->getVoterId() > 0) {?>ok<?php } else { ?>error<?php }?></td>
                <td><?php if ($_smarty_tpl->tpl_vars['row']->value->getVoterId() > 0 && $_smarty_tpl->tpl_vars['voter']->value->getAreaId() == $_smarty_tpl->tpl_vars['row']->value->getAreaId()) {?>ok<?php } else { ?>error<?php }?></td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value->getVoterId() > 0) {?>
                        <?php if (isset($_smarty_tpl->tpl_vars['ns']->value['duplicatedInListMappedByVoterId'][$_smarty_tpl->tpl_vars['row']->value->getVoterId()])) {?>
                            error
                        <?php } else { ?>
                            ok
                        <?php }?>
                    <?php } else { ?>
                        -
                    <?php }?>
                </td>
                <td>
                    <?php if (!isset($_smarty_tpl->tpl_vars['ns']->value['preVoteData'][$_smarty_tpl->tpl_vars['row']->value->getVoterId()])) {?>-<?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['ns']->value['preVoteData'][$_smarty_tpl->tpl_vars['row']->value->getVoterId()]->getWillVote() == 1) {?>
                            OK
                        <?php } else { ?>
                            Error
                        <?php }?>
                    <?php }?></td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value->getInvalid() == 1) {?>
                        <span title="<?php echo $_smarty_tpl->tpl_vars['row']->value->getInvalidNote();?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->getInvalidNote();?>
</span>
                    <?php }?>

                </td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
    </tbody>
</table> <?php }
}
?>