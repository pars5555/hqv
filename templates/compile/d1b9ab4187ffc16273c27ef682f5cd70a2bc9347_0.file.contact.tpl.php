<?php /* Smarty version 3.1.27, created on 2015-11-29 14:11:12
         compiled from "D:\xampp\htdocs\hqv\templates\main\contact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1757565acf40b957c1_65754173%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1b9ab4187ffc16273c27ef682f5cd70a2bc9347' => 
    array (
      0 => 'D:\\xampp\\htdocs\\hqv\\templates\\main\\contact.tpl',
      1 => 1448791741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1757565acf40b957c1_65754173',
  'variables' => 
  array (
    'ns' => 0,
    'SITE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565acf40bafca1_71819188',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565acf40bafca1_71819188')) {
function content_565acf40bafca1_71819188 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1757565acf40b957c1_65754173';
?>
<div class="container">
    <h4 class="search-header"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(18);?>
</h4>

    <?php if (isset($_smarty_tpl->tpl_vars['ns']->value['success_message'])) {?>
        <div class="row green-text">
            <?php echo $_smarty_tpl->tpl_vars['ns']->value['success_message'];?>

        </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['ns']->value['error_message'])) {?>
        <div class="row red-text">
            <?php echo $_smarty_tpl->tpl_vars['ns']->value['error_message'];?>

        </div>
    <?php }?>
    
    <div class="row">
        <form class="col s12" action="<?php echo $_smarty_tpl->tpl_vars['SITE_PATH']->value;?>
/dyn/main/do_contact" method="POST">
            <div class="row">
                <div class="col s6">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="first_name" name="first_name" type="text" class="validate" required>
                            <label for="first_name"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(8);?>
</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="last_name" name="last_name" type="text" class="validate" required>
                            <label for="last_name"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(9);?>
</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email"  name="email" type="email" class="validate" required>
                            <label for="email"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(22);?>
</label>
                        </div>
                    </div> 
                </div>
                <div class="col s6">
                    <p><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(61);?>
</p>
                    <p>
                        <a href="tel:<?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(59);?>
"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(62);?>
</a>,
                        <a href="tel:<?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(60);?>
"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(63);?>
</a>,
                        <a href="tel:<?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(61);?>
"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(64);?>
</a>
                    </p>
                </div>
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" name="body" class="materialize-textarea" required></textarea>
                            <label for="textarea1"><?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(46);?>
</label>
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn col grey ligten-3 s12 m12 12">
                            <?php echo $_smarty_tpl->tpl_vars['ns']->value['lm']->getPhrase(10);?>

                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>	
</div><?php }
}
?>