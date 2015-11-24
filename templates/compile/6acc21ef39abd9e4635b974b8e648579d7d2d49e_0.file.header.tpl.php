<?php /* Smarty version 3.1.27, created on 2015-11-24 21:40:26
         compiled from "D:\xampp\htdocs\hqv\templates\main\util\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:274035654cb3a2586e3_22341009%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6acc21ef39abd9e4635b974b8e648579d7d2d49e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\util\\header.tpl',
      1 => 1448397625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274035654cb3a2586e3_22341009',
  'variables' => 
  array (
    'ns' => 0,
    'SITE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5654cb3a27cd49_18361907',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5654cb3a27cd49_18361907')) {
function content_5654cb3a27cd49_18361907 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '274035654cb3a2586e3_22341009';
?>
 <nav>
    <div class="nav-wrapper grey darken-4">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      
      <ul class="right hide-on-med-and-down">
        <li <?php if ($_smarty_tpl->tpl_vars['ns']->value['loadName'] == 'default') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
">Գլխավոր </a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['ns']->value['loadName'] == 'contact') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/contact">Contact us</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['ns']->value['loadName'] == 'about') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/about">Մեր մասին</a></li>
        <li>
          <a id="lanBtn" class="f_lan_drop_down dropdown-button" href="javascript:void(0);" data-activates="dropdown1">Language<i class="material-icons right">arrow_drop_down</i></a>
          <ul id="dropdown1" class="dropdown-content">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/lang/am" class="f_cur_lan">Arm</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/lang/en" class="f_cur_lan">Eng</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/lang/ru" class="f_cur_lan">Rus</a></li>
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