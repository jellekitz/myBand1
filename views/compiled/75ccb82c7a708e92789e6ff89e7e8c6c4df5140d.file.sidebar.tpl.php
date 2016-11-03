<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 09:59:09
         compiled from "views\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3235057f79204c95da9-91507427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75ccb82c7a708e92789e6ff89e7e8c6c4df5140d' => 
    array (
      0 => 'views\\sidebar.tpl',
      1 => 1478163531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3235057f79204c95da9-91507427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f79204c97c02_87996159',
  'variables' => 
  array (
    'result2' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f79204c97c02_87996159')) {function content_57f79204c97c02_87996159($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp\\www\\leerjaar2\\periode1\\BACK\\Ingrid\\myBand\\libs\\plugins\\modifier.truncate.php';
?><div id="right">
    <div id="links1">
        /
    </div>
    <div id="midden1">
        <div id="tourHead">
        <h1>Upcoming tours</h1>
        </div>
        
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <article class="date">
    <h3><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title2'];?>
</h3>
    <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['place'],50,'..',true,true);?>

    <?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date'];?>

    </article>
    <?php } ?>

    </div>
    <div id="rechts1">
        /
    </div>
</div><?php }} ?>
