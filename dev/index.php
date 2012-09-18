<?php 
	$PAGE_ID = 'home';
	$PAGE_TITLE = 'Welcome!';
	require('_header.php'); 
?>

		<!-- START BODY -->
		
		<div id="hero" class="carousel slide">
            <div class="carousel-inner">
              <div class="item active">
                <img src="http://farm9.staticflickr.com/8174/7983096533_0f3bd868f7_b.jpg" alt="">
              </div>
              <div class="item">
                <img src="http://farm8.staticflickr.com/7121/7689743550_868edcd791_b.jpg" alt="">
              </div>
              <div class="item">
                <img src="http://farm6.staticflickr.com/5328/6939445374_4ec92ccd41_b.jpg" alt="">
              </div>
            </div>
            <a class="left carousel-control" href="#hero" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#hero" data-slide="next">&rsaquo;</a>
        </div> <!-- /.carousel -->
	
		<div class="container">
			<div class="row">
				<div id="main" class="span12 clearfix">
					<h2>Welcome to Gracepoint Riverside</h2>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div> <!-- /#main -->

				<div id="date" class="span4">
					<a href="time-location.php" class="button">
						<div id="gradient">								
							<div id="clock">
								<p><?php echo $SERVICE_TIME; ?></p>
							</div>	
						</div>
					</a>
					<div class="subtext">
						<p><?php echo date('l, F jS', $NEXTSERVICE_TIMESTAMP); ?></p>
					</div>
				</div>

				<div id="address" class="span4">
					<a href="time-location.php"  class="button">
						<p>
							<?php echo $LOCATION[$USE_LOCATION_INDEX]['line1']; ?>
							<br /><?php echo $LOCATION[$USE_LOCATION_INDEX]['line2']; ?>
						</p>
					</a>
					<div class="subtext">
						<p>We also provide rides!</p>
					</div>
				</div>

				<div id="events" class="span4">
					<a href="events.php" class="button">
						<p>Recent Events</p>
					</a>
					<div class="subtext">
						<p>See what we've been up to</p>
					</div>
				</div>					

				<div id="learn" class="span6">
					<a href="aboutus.php" class="button">
						<p>Learn More About Us</p>
					</a>
					<div class="subtext">
						<p>Get to know us, and learn what to expect</p>
					</div>
				</div>
				
				<div id="contact" class="span6">
					<a href="mailto:<?php echo $CONTACT_EMAIL; ?>" class="button">
						<div id="stamp">
							<p>Contact Us</p>
						</div>	
					</a>
					<div class="subtext">
						<p>Got questions or concerns? Shoot us an email!</p>
					</div>
				</div>

				<div id="gp-biglogo" class="span12">
				</div>
					
			</div> <!-- /.row (outer) -->
	
		</div> <!-- /.container -->
		<!--END BODY -->

<?php require('_footer.php'); ?>
