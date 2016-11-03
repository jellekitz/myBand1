<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 09:58:59
         compiled from "views\tourschema.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8393580b72f2c290f3-17855709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e43ac975bfa582ea4a930d01da08de46adcee31' => 
    array (
      0 => 'views\\tourschema.tpl',
      1 => 1478163526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8393580b72f2c290f3-17855709',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580b72f2c99ec9_16767472',
  'variables' => 
  array (
    'result2' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580b72f2c99ec9_16767472')) {function content_580b72f2c99ec9_16767472($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp\\www\\leerjaar2\\periode1\\BACK\\Ingrid\\myBand\\libs\\plugins\\modifier.truncate.php';
?><div id="tourschema">
<div id="tourLinks">
    /
</div>
<div id="tourMidden">
    <div id="tourHead">
        <h1>tours</h1>
        </div>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <article class="date">
    <h3><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title2'];?>
</h3>
    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['place'],1000,'..',true,true);?>

    <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date'];?>

    </article>
    <?php } ?>
</div>
<div id="tourRechts">
    /
</div>
</div><?php }} ?>
