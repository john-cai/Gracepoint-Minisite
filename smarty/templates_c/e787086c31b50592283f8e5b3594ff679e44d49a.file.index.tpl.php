<?php /* Smarty version Smarty-3.1.11, created on 2012-09-17 21:48:53
         compiled from "/Users/johncai/Sites/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8694647855057fd35c5f7a8-37819851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e787086c31b50592283f8e5b3594ff679e44d49a' => 
    array (
      0 => '/Users/johncai/Sites/index.tpl',
      1 => 1346736937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8694647855057fd35c5f7a8-37819851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5057fd35dff778_88339510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5057fd35dff778_88339510')) {function content_5057fd35dff778_88339510($_smarty_tpl) {?><html>
  <head>
    <title>Smarty</title>
  </head>
  <body>
   	<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>

	   <h1><?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
</h1>
	<h2><?php echo $_smarty_tpl->tpl_vars['event']->value['date'];?>
</h2>
	<div><?php echo $_smarty_tpl->tpl_vars['event']->value['content'];?>
</div>
	<?php } ?>
  </body>
</html><?php }} ?>