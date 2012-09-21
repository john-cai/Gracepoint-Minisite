<?php /* Smarty version Smarty-3.1.11, created on 2012-09-03 22:35:47
         compiled from "index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17316643975044546ad616a4-39733822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43b807af9cc8df7d350c3baf9e47f167c9520a0' => 
    array (
      0 => 'index.tpl',
      1 => 1346736937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17316643975044546ad616a4-39733822',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5044546ad9a532_71738529',
  'variables' => 
  array (
    'events' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5044546ad9a532_71738529')) {function content_5044546ad9a532_71738529($_smarty_tpl) {?><html>
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