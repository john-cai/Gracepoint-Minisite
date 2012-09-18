<?php require('_CONFIG.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title><?php echo $TITLE . ' - ' . $PAGE_TITLE; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $DESCRIPTION; ?>">
    <meta name="keywords" content="<?php echo $KEYWORDS; ?>">
    <meta name="author" content="<?php echo $TITLE; ?>">

<!-- 	<link rel="stylesheet" href="js/leaflet.css" /> -->
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
						<div class="span12">
							<div class="row">
								<h1 class="span3">
									<a class="brand" href="index.php">
										<img src="img/logo-gracepointriverside.png" alt="<?php echo $TITLE; ?>" />
									</a>	
								</h1>
								
								<div class="span9">
									<div class="navLinks">
										<a id="nav-about" href="aboutus.php">About Us</a>
										<a id="nav-time-location" href="time-location.php">Time &amp; Location</a>
										<a id="nav-events" href="events.php">Recent Events</a>
									</div>	
								</div>

							</div>	
						</div> 
					</div> <!-- /.row -->
				</div>
			</div><!--  /#navbar -->	
		</div><!-- /.container -->
	<!-- /HEADER -->
	
	<?php if ($UPDATE_MSG) { ?>
		<div class="container">
			<div class="alert alert-success">
				<strong>Special Announcement:</strong> <?php echo $UPDATE_MSG; ?>
			</div> <!-- /.alert -->
		</div>
	<?php } ?>
	