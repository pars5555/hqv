<?php /* Smarty version 3.1.27, created on 2015-11-16 17:49:18
         compiled from "D:\xampp\htdocs\hqv\modules\admin\templates\util\sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23904564a090ebac9c1_51069560%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8fa0044640d819c2e9979214a0524546141aef0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\modules\\admin\\templates\\util\\sidebar.tpl',
      1 => 1447692555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23904564a090ebac9c1_51069560',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564a090ec2fa29_61308402',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564a090ec2fa29_61308402')) {
function content_564a090ec2fa29_61308402 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23904564a090ebac9c1_51069560';
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
      <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='dashboard.index'><i class="material-icons left">language</i>Dashboard</a>
    </li>
    <li>
      <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='voters.index'><i class="material-icons left">perm_identity</i>Voters Data</a>
    </li>
    <li>
      <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='passport.index'><i class="material-icons left">perm_media</i>Passport</a>
    </li>
    <li>
      <a class="waves-effect waves-light btn-flat le sidebar" data-loadname='dashboard.index'><i class="material-icons left">language</i>Profile</a>
    </li>
    <li>
      <a class="waves-effect waves-light btn-flat le"><i class="material-icons left">input</i>Logout</a>
    </li>
  </ul>
  <a style="display:none;" href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons prefix">view_headline</i></a>
</div><?php }
}
?>