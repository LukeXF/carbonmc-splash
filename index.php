<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="http://cdn.css-tricks.com/favicon.ico">
		<title>Carbon-MC</title>
		<link href='http://fonts.googleapis.com/css?family=Yellowtail|Lato:100,300,400,700|Architects+Daughter' rel='stylesheet' type='text/css'>
		<link href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
		<link href='./style.css' rel='stylesheet' type='text/css'>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</head>
	<?php include "staff.php" ?>

	
	<body>
		<h1>Carbon-mc  Network</h1>
		<!--<h3>Coming Soon</h3>-->
		<section id="options">
					<div class="container">
							<div class="row">
									<div class="col-md-12">
						<a href="http://www.carbon-mc.net/forums"><img src="http://imgur.com/oZlDfB9.png"></a>
						<a href="http://carbon-mc.buycraft.net"><img src="http://imgur.com/QdOmuiO.png"></a>
						<a href="#coming soon"><img src="http://imgur.com/jok1JXA.png"></a>
						<a href="" data-toggle="modal" data-target="#basicModal"><img src="http://imgur.com/1VMZLCz.png"></a>
									</div>
							</div>
							<div class="row text-center">
									<div id="buttons" class="custom-well center-block">
											<?php 
											$data = json_decode( file_get_contents( 'http://minecraft-api.com/v1/get/carbon-mc.net' ), true ); 

											if ( $data['status'] == true ) { 
													// This will only be displayed if the server up and kick'in 
													echo 'The server is <a class="online">Online</a> with ' . $data['players']['online'] . '/' . $data['players']['max'] . ' players!'; 
											} else { 
													// This will only be displayed if the server is offline. 
													echo 'The server is Offline! :[ Check back later.'; 
											} 
											?>
									</div>
							</div>
					</div>
			</section>
	</body>
</html>

<script type="text/javascript">
	$('img').bind('contextmenu', function(e) {
		return false;
	});
	$('img').on('dragstart', function(event) { 
		event.preventDefault(); 
	});
	$(document).ready(function() {
	$("*").bind("contextmenu",function(){
		return false;
	}); 
	});
</script>