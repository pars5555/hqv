<?php /* Smarty version 3.1.27, created on 2015-11-27 17:21:39
         compiled from "D:\xampp\htdocs\hqv\templates\main\util\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8684565858e3490cd6_03647006%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75b750d2eb48887057fefcbb2e3130685cf8e28b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\util\\footer.tpl',
      1 => 1448630377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8684565858e3490cd6_03647006',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565858e34dcb01_55788363',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565858e34dcb01_55788363')) {
function content_565858e34dcb01_55788363 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8684565858e3490cd6_03647006';
?>
<footer class="page-footer blue darken-6">
  <div class="container">
    <div class="row">     
      <div class="col l12">
        <ul class="row">
          <li class="col l6">
            <p class="grey-text text-lighten-3"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(21);?>
</p>
            <p class="grey-text text-lighten-3"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(22);?>
:-<a href="mailto:info@transparency.am">info@transparency.am</a></p>
            <p class="grey-text text-lighten-3"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(23);?>
-<a href="tel:(+37410)569589">(+37410)569589</a></p>
            
          </li>
          <li class="col l6">
            <p class="grey-text text-lighten-3">
              <?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(24);?>

            </p>
            <p class="grey-text text-lighten-3">
              <?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(22);?>
:-<a href="mailto:europeinlaw@gmail.com">europeinlaw@gmail.com</a>
            </p>
            <p class="grey-text text-lighten-3">
              <?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(23);?>
-<a href="tel:(+37410) 500665">(+37410) 500665</a>,
              <a href="tel:099 588 576">099 588 576</a>
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright blue lighten-6">
    <div class="container">
    </div>
  </div>
</footer>
    <?php }
}
?>