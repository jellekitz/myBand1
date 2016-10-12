<?php /* Smarty version Smarty-3.1.18, created on 2016-10-12 14:44:40
         compiled from "views\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3185857f35b12e5dfd7-47038309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b287001d33b6d164cff757a8f8faf7d21074dd9' => 
    array (
      0 => 'views\\nav.tpl',
      1 => 1476276279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3185857f35b12e5dfd7-47038309',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f35b12f1dfd2_04273337',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f35b12f1dfd2_04273337')) {function content_57f35b12f1dfd2_04273337($_smarty_tpl) {?>
<nav>
    <ul>
    <li><a href="?action=home">Home</a></li>
    <li><a href="news.php">News</a></li>
    <li><a href="tour.php">Tour</a></li>
    <li><a href="contact.php">Contact</a></li>
        <li style="float:right"><a class="active" href="?action=about">About</a></li>
    </ul>
</nav><?php }} ?>
