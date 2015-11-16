<?php /* Smarty version 3.1.27, created on 2015-11-16 21:05:45
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\util\sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:32625564a3719b2cb62_67185377%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8fa0044640d819c2e9979214a0524546141aef0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\util\\sidebar.tpl',
      1 => 1447704210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32625564a3719b2cb62_67185377',
  'variables' => 
  array (
    'SITE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564a3719c098e0_34363642',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564a3719c098e0_34363642')) {
function content_564a3719c098e0_34363642 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32625564a3719b2cb62_67185377';
?>

<div id="slide-out" class="side-nav fixed">
  <div class="section red darken-3 right-align">
    <div class="row">
      <div class="col">
        <h5 class="white-text text-lighten-2 margin-right-5" >Հանրաքվե</h5>
      </div>
    </div>
  </div>
  <ul >
    <li>
      <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='dashboard.index' id="sidebar_dashboard_a"><i class="material-icons left">language</i>Dashboard</a>
    </li>
    <li>
      <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='voters.index' id="sidebar_voters_a"><i class="material-icons left">perm_identity</i>Voters Data</a>
    </li>
    <li>
      <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='passport.index' id="sidebar_passport_a"><i class="material-icons left">perm_media</i>Passport</a>
    </li>
    <li>
        <a class="waves-effect waves-light btn-flat le" href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/login/do_logout"><i class="material-icons left">input</i>Logout</a>
    </li>
  </ul>
  <a style="display:none;" href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons prefix">view_headline</i></a>
</div><?php }
}
?>