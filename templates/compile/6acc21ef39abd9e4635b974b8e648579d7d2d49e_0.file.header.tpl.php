<?php /* Smarty version 3.1.27, created on 2015-11-27 14:52:13
         compiled from "D:\xampp\htdocs\hqv\templates\main\util\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:32260565835dd483ea5_10145211%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6acc21ef39abd9e4635b974b8e648579d7d2d49e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\util\\header.tpl',
      1 => 1448621523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32260565835dd483ea5_10145211',
  'variables' => 
  array (
    'SITE_PATH' => 0,
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565835dd4e3098_05782425',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565835dd4e3098_05782425')) {
function content_565835dd4e3098_05782425 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32260565835dd483ea5_10145211';
?>
 <nav>
  <div class="nav-wrapper blue darken-4">
    <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
" class="brand-logo"><img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/img/logo.png" /></a>
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
<i class="material-icons right icon-wrapper">arrow_drop_down</i></a>
        <ul id="dropdown1" class="dropdown-content">
          <li>
              <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/lang/am" class="f_cur_lan blue-text">
                  <img width="25" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/img/arm_flag.png" />
                  <?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(31);?>

              </a>
            </li>
          <li class="divider"></li>
          <li>
              <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/lang/en" class="f_cur_lan blue-text">
                <img width="25" src="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/img/eng_flag.png" />
                <?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(32);?>

              </a>
          </li>
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