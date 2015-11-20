<?php /* Smarty version 3.1.27, created on 2015-11-20 11:17:02
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\passport\list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17318564ef31ed6e8c7_19551757%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0134ffec2dfe5bda09aea4cca693522774a444f9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\passport\\list.tpl',
      1 => 1448014618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17318564ef31ed6e8c7_19551757',
  'variables' => 
  array (
    'ns' => 0,
    'page' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564ef31edaf092_73608302',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ef31edaf092_73608302')) {
function content_564ef31edaf092_73608302 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17318564ef31ed6e8c7_19551757';
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
            <th>In List</th>
            <th>All Ok</th>
            <th>invalid?</th>
            <th>Actions</th>
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
            <tr data-rowid="<?php echo $_smarty_tpl->tpl_vars['row']->value->getId();?>
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
                <td>
                    <div class="switch">
                        <label class="active"> 
                            invalid
                        <input data-rowid="<?php echo $_smarty_tpl->tpl_vars['row']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value->getInvalid() == 0) {?>checked<?php }?>  class="f_validationBtn" type="checkbox" />
                        <span class="lever"></span>
                            valid
                        </label>
                    </div>
                    <!-- <a data-rowid="<?php echo $_smarty_tpl->tpl_vars['row']->value->getId();?>
" href="javascript:void(0);" class="validVoteButton">+</a>
                    <a data-rowid="<?php echo $_smarty_tpl->tpl_vars['row']->value->getId();?>
" href="javascript:void(0);" class="invalidVoteButton">X</a> -->
                </td>
                <td>
                    <a data-rowid="<?php echo $_smarty_tpl->tpl_vars['row']->value->getId();?>
" class="f_edit waves-effect waves-light btn">Edit<i class="material-icons left">mode_edit</i></a>
                </td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
    </tbody>
</table>    
<div id="caseInvalidModel" class="modal">
    <div class="modal-content">
        <h4>Why do you want to set Invalid</h4>
        <p>Describe below</p>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="setInvalidDescr" class="materialize-textarea"></textarea>
                <label for="textarea1">Textarea</label>
            </div>
            <p id="setInvalidDescrErr" class="red-text darken-2">Please fill up</p>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" id="setInvalidBtn" class="modal-action waves-effect btn" style="margin-left:10px;">Confirm</a>
        <a href="#!" class="modal-action modal-close waves-effect btn">Cancel</a>
    </div>
</div><?php }
}
?>