	<!-- START BODY -->
		
		<div class="container">
			<div class="row">
				<div id="main" class="span12 clearfix">
					<h3>Sharing Memories</h3>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
			{foreach $events as $event}
					<!-- Begin .event -->
					<div id="{$event['name']|replace:' ':'-'|lower}" class="event"> 
						<!-- To John: we need a unique id for each carousel: -->
						<div id="{$event['name']|replace:' ':'-'|lower}-carousel" class="carousel slide">
						
			                <div class="carousel-inner">
							
							{foreach $event['pictures'] as $piclink}
							 <div class="item">
			                    <img src="{$piclink}" alt=""/>
			                  </div>
							{/foreach}
			                </div>
			                <a class="left carousel-control" href="#{$event['name']|replace:' ':'-'|lower}-carousel" data-slide="prev">&lsaquo;</a>
			                <a class="right carousel-control" href="#{$event['name']|replace:' ':'-'|lower}-carousel" data-slide="next">&rsaquo;</a>
			            </div> <!-- /.carousel -->
			            
						
						<div class="info">
							<div class="row">
								<div class="span10 offset1">
									<div class="row">
										<h4 class="span8">{$event['name']}</h4>
									
										<div class="span2 date">{$event['date']}</div>

										<div class="span10 blurb">
											{$event['content']}
										</div>
									</div> <!-- /.row -->
								</div> <!-- /.span8 .offset1 -->
							</div> <!-- /.row -->
							
						</div> <!-- /.info -->
					</div> <!-- /.event -->
					{/foreach}
					
				</div> <!-- /#main -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->

		<!--END BODY -->