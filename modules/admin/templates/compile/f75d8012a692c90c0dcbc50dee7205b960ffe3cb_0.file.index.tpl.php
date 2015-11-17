<?php /* Smarty version 3.1.27, created on 2015-11-17 08:02:52
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\dashboard\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23087564ad11c3ce251_85710502%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f75d8012a692c90c0dcbc50dee7205b960ffe3cb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\dashboard\\index.tpl',
      1 => 1447743763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23087564ad11c3ce251_85710502',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564ad11c3d8531_59533058',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ad11c3d8531_59533058')) {
function content_564ad11c3d8531_59533058 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23087564ad11c3ce251_85710502';
?>
<div class="breadscrumb">
    <nav class="red darken-3" style="padding-left:10px;">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="#!" class="breadcrumb">Admin</a>
                <a href="#!" class="breadcrumb">Dashboard</a>
            </div>
        </div>
    </nav>
</div>
<div class="admin-content">
    <div class="row">
        <div class="col s4 m4 4">
            <div class="row">
                <div class="col s8 m8 l8 section green darken-3 white-text text-lighten-2">
                    <div class="row">
                        <div class="col s6 m12 l4">
                            <i class="large material-icons">insert_chart</i>
                        </div>
                        <div class="col s6 m12 l8">
                            countGroupByVoter : <?php echo $_smarty_tpl->tpl_vars['ns']->value['countGroupByVoter'];?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s4 m4 4">
            <div class="row">
                <div class="col s8 m8 l8 section green darken-3 white-text text-lighten-2">
                    <div class="row">
                        <div class="col s6 m12 l4">
                            <i class="large material-icons">insert_chart</i>
                        </div>
                        <div class="col s6 m12 l8">
                            nonParticipantCounts : <?php echo $_smarty_tpl->tpl_vars['ns']->value['nonParticipantCounts'];?>
<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s4 m4 4">
            <div class="row">
                <div class="col s8 m8 l8 section green darken-3 white-text text-lighten-2">
                    <div class="row">
                        <div class="col s6 m12 l4">
                            <i class="large material-icons">insert_chart</i>
                        </div>
                        <div class="col s6 m12 l8">
                            ParticipantCounts : <?php echo $_smarty_tpl->tpl_vars['ns']->value['participantCounts'];?>
<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s4 m4 4">
            
        </div>
        <div class="col s4 m4 4">
            
        </div>
    </div>
        <br>
        
        
       
</div><?php }
}
?>