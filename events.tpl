	<!-- START BODY -->
		
		<div class="container">
			<div class="row">
				<div id="main" class="span12 clearfix">
					<h3>Sharing Memories</h3>
					<p class="lead">At Gracepoint, church is more than something you attend once a week on Sunday. We believe in living out the spiritual community modeled for us in Acts 2:42, who "devoted themselves to the apostles' teaching and the fellowship, to the breaking of bread and the prayers." What does this look like? It's a place to learn about God, grow spiritually and ask questions. It's building long-lasting relationships and sharing meals in each others' homes. Here's a glimpse at what we’ve been up to.</p>
					
			{foreach $events as $event}
					<!-- Begin .event -->
					<div id="{$event['name']|replace:' ':'-'|lower}" class="event"> 
						<!-- To John: we need a unique id for each carousel: -->
						<div id="{$event['name']|replace:' ':'-'|lower}-carousel" class="carousel slide">
						
			                <div class="carousel-inner">
							{assign var="firstpic" value="true"}
							{foreach $event['pictures'] as $piclink}
							 <div class="item {if $firstpic eq "true"}active {assign var="firstpic" value="false"} {/if}">
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