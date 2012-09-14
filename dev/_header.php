<?php require('_CONFIG.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title><?php echo $TITLE . '-' . $PAGE_TITLE; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $DESCRIPTION; ?>">
    <meta name="author" content="<?php echo $TITLE; ?>">

	<link rel="stylesheet" href="js/leaflet.css" />
	<!--[if lte IE 8]>
	 <link rel="stylesheet" href="js/leaflet.ie.css" />
	<![endif]-->
    <link href="assets/bootstrap.gracepoint.less" rel="stylesheet/less">

</head>

<?php // $PAGE_ID is defined above call to _header.php ?>

<body id="<?php echo $PAGE_ID; ?>">

	<div id="outer">
	
	<!-- HEADER -->
		<div id="height-restriction" class="container">
			<div id="nav-bar">
				<div id="border">
					<div class="row">
						<div  class="span12">
							<div  class="row">
								<div class="span3">
									<a class="brand" href="index.php">
										<div id="gp-smallLogo">
										</div>	
									</a>	
								</div>
								
								<div class="span7 offset2">
									<div class="navLinks">
										<span class="<?php if ($PAGE_ID == 'about') echo 'highlight'; ?>">																	
											<a href="about.php">About Us</a>
										</span>
										<span class="<?php if ($PAGE_ID == 'time-location') echo 'highlight'; ?>">	
											<a id="locate" href="time-location.php">Time &amp; Location</a>
										</span>
										<span class="<?php if ($PAGE_ID == 'events') echo 'highlight'; ?>">
											<a href="events.php">Recent Events</a>								
										</span>	
									</div>	
								</div>
								
							
								
							</div>	
						</div> 
					</div> <!-- /.row -->
				</div>
			</div><!--  /#navbar -->	
		</div><!-- ./container -->
	<!-- /HEADER -->		