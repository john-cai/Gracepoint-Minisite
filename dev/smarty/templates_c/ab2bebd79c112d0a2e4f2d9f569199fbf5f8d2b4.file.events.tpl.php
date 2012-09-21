<?php /* Smarty version Smarty-3.1.11, created on 2012-09-21 00:52:29
         compiled from "events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:628979815505c1cbd7877e0-91980122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab2bebd79c112d0a2e4f2d9f569199fbf5f8d2b4' => 
    array (
      0 => 'events.tpl',
      1 => 1348208014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '628979815505c1cbd7877e0-91980122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events' => 0,
    'event' => 0,
    'piclink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505c1cbd818788_19261727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505c1cbd818788_19261727')) {function content_505c1cbd818788_19261727($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/gpriver/public_html/Gracepoint-Minisite-gary/dev/lib/Smarty-3.1.11/libs/plugins/modifier.replace.php';
?>	<!-- START BODY -->
		
		<div class="container">
			<div class="row">
				<div id="main" class="span12 clearfix">
					<h3>Sharing Memories</h3>
					<p class="lead">At Gracepoint, church is more than something you attend once a week on Sunday. We believe in living out the spiritual community modeled for us in Acts 2:42, who "devoted themselves to the apostles' teaching and the fellowship, to the breaking of bread and the prayers." What does this look like? It's a place to learn about God, grow spiritually and ask questions. It's building long-lasting relationships and sharing meals in each others' homes. Here's a glimpse at what we’ve been up to.</p>
					
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