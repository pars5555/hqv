<?php /* Smarty version 3.1.27, created on 2015-11-25 15:32:45
         compiled from "D:\xampp\htdocs\hqv\templates\main\util\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:140725655c68d801623_17838906%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75b750d2eb48887057fefcbb2e3130685cf8e28b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\util\\footer.tpl',
      1 => 1448461919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140725655c68d801623_17838906',
  'variables' => 
  array (
    'ns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5655c68d824fe0_59183073',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5655c68d824fe0_59183073')) {
function content_5655c68d824fe0_59183073 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '140725655c68d801623_17838906';
?>
<footer class="page-footer grey darken-4">
  <div class="container">
    <div class="row">
      <div class="col l6 s12 hide">
        <h5 class="white-text">Footer Content</h5>
        <p class="grey-text text-lighten-4">Test Test Test Test Test Test Test Test Test Test Test Test.</p>
      </div>
      <div class="col l6 offset-l6 s12">
        <ul>
          <li>
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
          <li>
            <p class="grey-text text-lighten-3"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(21);?>
</p>
            <p class="grey-text text-lighten-3"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(22);?>
:-<a href="mailto:info@transparency.am">info@transparency.am</a></p>
            <p class="grey-text text-lighten-3"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(23);?>
-<a href="tel:(+37410)569589">(+37410)569589</a></p>
            <p class="grey-text text-lighten-3"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(25);?>
</p>
            <p class="grey-text text-lighten-3"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(26);?>
</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright grey ligten-4">
    <div class="container">
    </div>
  </div>
</footer>
    <?php }
}
?>