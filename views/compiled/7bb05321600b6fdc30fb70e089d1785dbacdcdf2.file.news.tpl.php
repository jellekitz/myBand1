<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 13:21:54
         compiled from "views\news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25550580b7ca5797811-58795840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bb05321600b6fdc30fb70e089d1785dbacdcdf2' => 
    array (
      0 => 'views\\news.tpl',
      1 => 1478175712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25550580b7ca5797811-58795840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580b7ca5a092d1_28452105',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580b7ca5a092d1_28452105')) {function content_580b7ca5a092d1_28452105($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp\\www\\leerjaar2\\periode1\\BACK\\Ingrid\\myBand\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\www\\leerjaar2\\periode1\\BACK\\Ingrid\\myBand\\libs\\plugins\\modifier.date_format.php';
?><div id="tourschema">
<div id="newsLinks">
    /
</div>
<div id="newsMidden">
    <div id="tourHead">
        <h1>News</h1>
        </div>
    <section>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
         <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
    <img src=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
>
    <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['video']=='') {?>
        
        <?php } else { ?>
        <iframe src=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['video'];?>
></iframe>
        <?php }?>
    <br>
    <content><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],1000,'..',true,true);?>
</content>
    <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%d %B %Y");?>
</p>
    
    <?php } ?>
</section>
</div>
<div id="newsRechts">
    /
</div>
</div><?php }} ?>
