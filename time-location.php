<?php 
	$PAGE_ID = 'time-location';
	$PAGE_TITLE = "Time and Location";
	require('_header.php'); 
?>
	
		<div class="container">
			<div class="row">
				<div id="main" class="span8 clearfix">
					<h3>When and Where We Meet</h3>
					<p class="lead">Looking for a church near UCR? Join us as we meet each week for Sunday Worship Service. You'll find a place to ask your questions and grow spiritually!</p>
				</div>
				<div class="span4">
					<img class="img-polaroid" src="<?php echo $LOCATION[$USE_LOCATION_INDEX]['thumbnail']; ?>" />
				</div>
			</div>
				
			<div class="row info">
				<div class="span4"><div id="date"><?php echo date('l, M j', $NEXTSERVICE_TIMESTAMP); ?></div></div>
				<div class="span3"><div id="time"><?php echo $SERVICE_TIME; ?></div></div>
				<div class="span5"><div id="location">
					<?php if ($LOCATION[$USE_LOCATION_INDEX]['line1']) echo $LOCATION[$USE_LOCATION_INDEX]['line1']; else echo $LOCATION[$USE_LOCATION_INDEX]['name']; ?> 
					<?php if ($LOCATION[$USE_LOCATION_INDEX]['helpinfo']) { ?>
						<span id="helpinfo" data-content="<?php echo $LOCATION[$USE_LOCATION_INDEX]['helpinfo']; ?>"><i class="icon-info-sign"></i></span>
					<?php } ?>
				</div></div>
			</div>
			
			<div class="row">
				<div>
					<div id="map" class="map span12"></div>
					</div>
			</div>
			
			<div id="mapError" class="alert alert-block alert-error fade in" style="display:none;">
				<h4 class="alert-heading">Error!</h4>
				<a class="close" data-dismiss="alert" href="#">&times;</a>
				<p>Invalid address</p>
			</div>
			
			<form id="getDir_form">
				<div class="row">
					<div class="span9"><input id="startAddr" type="text" class="span9" placeholder="Enter your starting address"></div>
					<div class="span3"><button id="getDir" type="button" class="btn btn-primary btn-block">Get Directions</button></div>
				</div>
			</form>
			

<!-- 			<div id="dirSteps" style="display:none;"></div> -->

			<div class="breaker"></div>

			<?php if ($RIDES_TIME) { ?>
			<div class="row">
				<div class="span12"> 
					<a name="rides"></a>
					<h3>Need a Ride to Church?</h3>
					<p class="lead">We've got you covered! We provide rides to church from the UCR dorms and elsewhere near campus. All rides will be leaving at <span class="label label-warning"><?php echo $RIDES_TIME; ?></span> from these locations:</p>
				</div>
				
<!--
				<div class="span4">
					<div class="video">
						<iframe src="http://player.vimeo.com/video/29915285?title=0&amp;byline=0&amp;portrait=0" width="500" height="275" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
-->
			</div>
			
			<div class="row">
				<?php
					$list = '';
					$i = 1;
					foreach($USE_RIDES_ARRAY as $index) {
						$list .= '<li class="span3"><span id="rides-' . $index . '" class="rides-nav"><span class="ordinal">' . $i++ . '</span>' . $RIDES[$index]['location'] . '<small>' . $RIDES[$index]['desc'] . '</small></span></li>';
					}
				?>
				
				<ul class="rides">
					<?php echo $list; ?>
				</ul>


				<div id="rides_map" class="map span12"></div>

			</div>
			
			<?php } else { ?>
			
			<em>Rides won't be provided this week!</em>
			
			<?php } ?>

		</div> <!-- /.container -->

		
<?php require('_footer.php'); ?>