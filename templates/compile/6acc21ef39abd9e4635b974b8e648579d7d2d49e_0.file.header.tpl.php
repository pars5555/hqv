<?php /* Smarty version 3.1.27, created on 2015-11-25 15:44:42
         compiled from "D:\xampp\htdocs\hqv\templates\main\util\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:282945655c95a71a3d2_85524607%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6acc21ef39abd9e4635b974b8e648579d7d2d49e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\util\\header.tpl',
      1 => 1448462669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282945655c95a71a3d2_85524607',
  'variables' => 
  array (
    'SITE_PATH' => 0,
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5655c95a7920b1_20410824',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5655c95a7920b1_20410824')) {
function content_5655c95a7920b1_20410824 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '282945655c95a71a3d2_85524607';
?>
 <nav>
  <div class="nav-wrapper grey darken-4">
    <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
" class="brand-logo">Logo</a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    
    
    <ul class="right hide-on-med-and-down">
      <li <?php if ($_smarty_tpl->tpl_vars['ns']->value['loadName'] == 'default') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(17);?>
</a></li>
      <li <?php if ($_smarty_tpl->tpl_vars['ns']->value['loadName'] == 'contact') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/contact"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(18);?>
</a></li>
      <li <?php if ($_smarty_tpl->tpl_vars['ns']->value['loadName'] == 'about') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/about"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(19);?>
</a></li>
      <li>
        <a id="lanBtn" class="f_lan_drop_down dropdown-button" href="javascript:void(0);" data-activates="dropdown1"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(20);?>
<i class="material-icons right">arrow_drop_down</i></a>
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/lang/am" class="f_cur_lan"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(31);?>
</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/lang/en" class="f_cur_lan"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(32);?>
</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/lang/ru" class="f_cur_lan"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(33);?>
</a></li>
        </ul>
      </li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(17);?>
</a></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/contact"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(18);?>
</a></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/about"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(19);?>
</a></li>
      <!-- <li><a class="f_lan_drop_down dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li> -->
    </ul>
  </div>
</nav><?php }
}
?>