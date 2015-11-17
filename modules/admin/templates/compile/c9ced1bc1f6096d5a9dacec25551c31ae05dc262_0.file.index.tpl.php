<?php /* Smarty version 3.1.27, created on 2015-11-17 10:25:33
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\analyze\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3264564af28d57d1b1_74529445%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9ced1bc1f6096d5a9dacec25551c31ae05dc262' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\analyze\\index.tpl',
      1 => 1447752216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3264564af28d57d1b1_74529445',
  'variables' => 
  array (
    'ns' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564af28d5aca84_32387558',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564af28d5aca84_32387558')) {
function content_564af28d5aca84_32387558 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3264564af28d57d1b1_74529445';
?>
<div class="breadscrumb">
    <nav class="red darken-3" style="padding-left:10px;">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Admin</a>
                <a href="#!" class="breadcrumb">Passport</a>
            </div>
        </div>
    </nav>
</div>
<div class="admin-content">
    <div class="row" id="duplicatedVoterContainer">
        
    </div>
    <div class="row">
        <table class="responsive-table real-voters">
            <thead>
                <tr>
                    <th data-field="id">First Name</th>
                    <th data-field="name">Last Name</th>
                    <th data-field="price">Father Price</th>
                    <th data-field="price">Birth Date</th>
                    <th data-field="price">Vote Count</th>
                    <th data-field="price">In List</th>
                </tr>
            </thead>
            <tbody id="real_duplicated_voters_table">
                <?php
$_from = $_smarty_tpl->tpl_vars['ns']->value['duplicatedRealVoters'];
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
                        <td><?php if ($_smarty_tpl->tpl_vars['row']->value->getVoterId() > 0) {?>yes<?php } else { ?>no<?php }?></td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
            </tbody>
        </table> 
    </div>
</div><?php }
}
?>