<?php /* Smarty version Smarty-3.1.11, created on 2012-09-17 22:16:29
         compiled from "events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12402455105057fe5eaad241-71341551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab2bebd79c112d0a2e4f2d9f569199fbf5f8d2b4' => 
    array (
      0 => 'events.tpl',
      1 => 1347945232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12402455105057fe5eaad241-71341551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5057fe5ecd7f46_43781186',
  'variables' => 
  array (
    'events' => 0,
    'event' => 0,
    'piclink' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5057fe5ecd7f46_43781186')) {function content_5057fe5ecd7f46_43781186($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/usr/local/lib/php/Smarty-3.1.11/libs/plugins/modifier.replace.php';
?>	<!-- START BODY -->
		
		<div class="container">
			<div class="row">
				<div id="main" class="span12 clearfix">
					<h3>Sharing Memories</h3>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
			<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
					<!-- Begin .event -->
					<div id="<?php echo mb_strtolower(smarty_modifier_replace($_smarty_tpl->tpl_vars['event']->value['name'],' ','-'), 'UTF-8');?>
" class="event"> 
						<!-- To John: we need a unique id for each carousel: -->
						<div id="<?php echo mb_strtolower(smarty_modifier_replace($_smarty_tpl->tpl_vars['event']->value['name'],' ','-'), 'UTF-8');?>
-carousel" class="carousel slide">
						
			                <div class="carousel-inner">
							
							<?php  $_smarty_tpl->tpl_vars['piclink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['piclink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event']->value['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['piclink']->key => $_smarty_tpl->tpl_vars['piclink']->value){
$_smarty_tpl->tpl_vars['piclink']->_loop = true;
?>
							 <div class="item">
			                    <img src="<?php echo $_smarty_tpl->tpl_vars['piclink']->value;?>
" alt=""/>
			                  </div>
							<?php } ?>
			                </div>
			                <a class="left carousel-control" href="#<?php echo mb_strtolower(smarty_modifier_replace($_smarty_tpl->tpl_vars['event']->value['name'],' ','-'), 'UTF-8');?>
-carousel" data-slide="prev">&lsaquo;</a>
			                <a class="right carousel-control" href="#<?php echo mb_strtolower(smarty_modifier_replace($_smarty_tpl->tpl_vars['event']->value['name'],' ','-'), 'UTF-8');?>
-carousel" data-slide="next">&rsaquo;</a>
			            </div> <!-- /.carousel -->
			            
						
						<div class="info">
							<div class="row">
								<div class="span10 offset1">
									<div class="row">
										<h4 class="span8"><?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
</h4>
									
										<div class="span2 date"><?php echo $_smarty_tpl->tpl_vars['event']->value['date'];?>
</div>

										<div class="span10 blurb">
											<?php echo $_smarty_tpl->tpl_vars['event']->value['content'];?>

										</div>
									</div> <!-- /.row -->
								</div> <!-- /.span8 .offset1 -->
							</div> <!-- /.row -->
							
						</div> <!-- /.info -->
					</div> <!-- /.event -->
					<?php } ?>
					
				</div> <!-- /#main -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->

		<!--END BODY --><?php }} ?>