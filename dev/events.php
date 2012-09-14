<?php 
	$PAGE_ID = 'events';
	$PAGE_TITLE = 'Recent Events';
	require('_header.php'); 
?>

		<!-- START BODY -->
		
		<div class="container">
			<div class="row">
				<div id="main" class="span12 clearfix">
					<h3>Sharing Memories</h3>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
					<!-- Begin .event -->
					<div class="event"> 
						<img src="http://placehold.it/940x500" alt="">
						<div class="info">

							<div class="row">
								<div class="span10 offset1">
									<div class="row">
										<h4 class="span8">Easter Baptism</h4>
										<div class="span2 date">Apr 12th, 2012</div>

										<div class="span10 blurb">
											<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
											<p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
										</div>
									</div> <!-- /.row -->
								</div> <!-- /.span8 .offset1 -->
							</div> <!-- /.row -->
							
						</div> <!-- /.info -->
					</div> <!-- /.event -->
					
					<!-- Begin .event -->
					<div class="event"> 
						<!-- To John: we need a unique id for each carousel: -->
						<div id="easter-baptism" class="carousel slide">
			                <div class="carousel-inner">
			                  <div class="item active">
			                    <img src="http://placehold.it/940x500" alt="">
			                  </div>
			                  <div class="item">
			                    <img src="http://placehold.it/940x500" alt="">
			                  </div>
			                  <div class="item">
			                    <img src="http://placehold.it/940x500" alt="">
			                  </div>
			                </div>
			                <a class="left carousel-control" href="#easter-baptism" data-slide="prev">&lsaquo;</a>
			                <a class="right carousel-control" href="#easter-baptism" data-slide="next">&rsaquo;</a>
			            </div> <!-- /.carousel -->
			            
						
						<div class="info">
							<div class="row">
								<div class="span10 offset1">
									<div class="row">
										<h4 class="span8">Easter Baptism</h4>
										<div class="span2 date">Apr 12th, 2012</div>

										<div class="span10 blurb">
											<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
											<p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
										</div>
									</div> <!-- /.row -->
								</div> <!-- /.span8 .offset1 -->
							</div> <!-- /.row -->
							
						</div> <!-- /.info -->
					</div> <!-- /.event -->
					
				</div> <!-- /#main -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->

		<!--END BODY -->

<?php require('_footer.php'); ?>
