<?php /* Smarty version 3.1.27, created on 2015-11-13 09:41:01
         compiled from "D:\xampp\htdocs\hqv\templates\main\util\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:142315645a21d899315_34614719%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6acc21ef39abd9e4635b974b8e648579d7d2d49e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\util\\header.tpl',
      1 => 1447404060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142315645a21d899315_34614719',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5645a21d8b6c00_27283584',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5645a21d8b6c00_27283584')) {
function content_5645a21d8b6c00_27283584 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '142315645a21d899315_34614719';
?>
 <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li class="active"><a href="">Home</a></li>
        <li><a href="">Contact us</a></li>
        <li><a href="">About us</a></li>
        <li>
          <a id="lanBtn" class="f_lan_drop_down dropdown-button" href="javascript:void(0);" data-activates="dropdown1">Language<i class="material-icons right">arrow_drop_down</i></a>
          <ul id="dropdown1" class="dropdown-content">
            <li><a href="javascript:void(0);" class="f_cur_lan">Am</a></li>
            <li class="divider"></li>
            <li><a href="javascript:void(0);" class="f_cur_lan">En</a></li>
            <li class="divider"></li>
            <li><a href="javascript:void(0);" class="f_cur_lan">Rus</a></li>
          </ul>
        </li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="">Home</a></li>
        <li><a href="">Contact us</a></li>
        <li><a href="">About us</a></li>
        <!-- <li><a class="f_lan_drop_down dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li> -->
      </ul>
    </div>
  </nav><?php }
}
?>