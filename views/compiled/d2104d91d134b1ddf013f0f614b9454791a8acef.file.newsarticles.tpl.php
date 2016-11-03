<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 13:47:40
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1382757f4f6d3ece262-08704078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1478177260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1382757f4f6d3ece262-08704078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f4f6d3f1f814_45659333',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4f6d3f1f814_45659333')) {function content_57f4f6d3f1f814_45659333($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp\\www\\leerjaar2\\periode1\\BACK\\Ingrid\\myBand\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\www\\leerjaar2\\periode1\\BACK\\Ingrid\\myBand\\libs\\plugins\\modifier.date_format.php';
?><div id="left">
<section>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
         <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
    <content><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],1000,'..',true,true);?>
</content>
    <br>
    <image src=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
>
        <?php if ($_smarty_tpl->tpl_vars['oneItem']->value['video']=='') {?>
        
        <?php } else { ?>
        <iframe src=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['video'];?>
></iframe>
        <?php }?>
    <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%d %B %Y");?>
</p>
    
    <?php } ?>
</section>
    <div id="pagenmr">
    <ul>
        <li><a href="?action=home&page_nr=1">1</a></li>
        <li><a href="?action=home&page_nr=2">2</a></li>
        <li><a href="?action=home&page_nr=3">3</a></li>
        <li><a href="?action=home&page_nr=4">4</a></li>
    </ul>
        </div>
     </div><?php }} ?>
