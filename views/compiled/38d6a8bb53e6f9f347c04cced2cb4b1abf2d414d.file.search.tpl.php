<?php /* Smarty version Smarty-3.1.18, created on 2016-11-02 15:55:45
         compiled from "views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74845819d59b64b6f0-74474653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38d6a8bb53e6f9f347c04cced2cb4b1abf2d414d' => 
    array (
      0 => 'views\\search.tpl',
      1 => 1478098544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74845819d59b64b6f0-74474653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5819d59b67a2c9_03394593',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5819d59b67a2c9_03394593')) {function content_5819d59b67a2c9_03394593($_smarty_tpl) {?><form>
  <input type="text" name="Code"  onKeyup="showUser(this.value)">
</form>
<div id="txtHint"></div><?php }} ?>
