<?php /* Smarty version 3.1.27, created on 2015-11-24 21:30:44
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\util\sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:82955654c8f4dd5406_32640285%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8fa0044640d819c2e9979214a0524546141aef0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\util\\sidebar.tpl',
      1 => 1448397044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82955654c8f4dd5406_32640285',
  'variables' => 
  array (
    'ns' => 0,
    'SITE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5654c8f4dfba41_74737182',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5654c8f4dfba41_74737182')) {
function content_5654c8f4dfba41_74737182 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '82955654c8f4dd5406_32640285';
?>

<div id="slide-out" class="side-nav fixed">
    <div class="section grey darken-4 right-align">
        <div class="row">
            <div class="col">
                <h5 class="white-text text-lighten-2 margin-right-5" >Հանրաքվե</h5>
            </div>
        </div>
    </div>
    <ul >
        <li id="sidebar_dashboard_li">
            <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='dashboard.index' ><i class="material-icons left">language</i>Dashboard</a>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['ns']->value['userType'] == $_smarty_tpl->tpl_vars['ns']->value['userTypeAdmin']) {?>
            <li id="sidebar_voters_li">
                <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='voters.index' ><i class="material-icons left">perm_identity</i>Pre Vote Data</a>
            </li>
        <?php }?>
        <li id="sidebar_passport_li">
            <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='passport.index'><i class="material-icons left">perm_media</i>Passport</a>
        </li>
        <li id="sidebar_number_li">
            <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='number.index'><i class="material-icons left">perm_media</i>Number</a>
        </li>
        <li id="sidebar_prevote_li">
            <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='prevote.index'><i class="material-icons left">perm_media</i>Prevote</a>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['ns']->value['userType'] == $_smarty_tpl->tpl_vars['ns']->value['userTypeAdmin']) {?>
            <li id="sidebar_passanalyze_li">
                <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='passanalyze.index'><i class="material-icons left">perm_media</i>Passport Analyze</a>
            </li>
            <li id="sidebar_numanalyze_li">
                <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='numanalyze.index'><i class="material-icons left">perm_media</i>Numbers Analyze</a>
            </li>
            <li id="sidebar_prevoteanalyze_li">
                <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='prevoteanalyze.index'><i class="material-icons left">perm_media</i>Prevote Analyze</a>
            </li>
        <?php }?>
        <li>
            <a class="waves-effect waves-light btn-flat le" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/login/do_logout"><i class="material-icons left">input</i>Logout</a>
        </li>
    </ul>
    <!-- <a style="" href="#"  class="button-collapse"><i class="material-icons prefix">view_headline</i></a> -->
</div><?php }
}
?>