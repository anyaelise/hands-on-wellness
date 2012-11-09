<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	
	<title>One Love Bodywork</title>

	<link rel="icon" type="image/png" href="/application/images/favicon.png" />
	
	<link rel="stylesheet" type="text/css" href="/application/css/main.css" />
	<link href="/application/css/smoothness/jquery-ui-1.9.1.custom.css" rel="stylesheet">
	
	<script type="text/javascript" src="/application/js/jquery-1.8.2.js"></script>
	<script src="/application/js/jquery-ui-1.9.1.custom.js"></script>
		
	<script type="text/javascript">
	$(document).ready(function(){	
		$(function() {
			$( "#services" ).tabs();
		});
	 });
	</script>
</head>

<body>

<div id="services">
	<ul>
		<li><a href="#services-1">Signature Four Hand Services</a></li>
		<li><a href="#services-2">Targeted Four Hand Services </a></li>
		<li><a href="#services-3">Single Therapist Services</a></li>
	</ul>
	<div id="services-1"> 
	<?php foreach($services as $key => $val) {
			if($val == 1) {
				echo "<h3>$key</h3>";
				echo "<p>$descs[$key]</p>";
				foreach($rates[$key] as $length => $rate) {
					echo "<p class=\"rates\">$length minutes - \$$rate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
				}
				echo "<br>";
			}
 		  }	
	?>
	</div>
	<div id="services-2">
	<?php foreach($services as $key => $val) {
			if($val == 2) {
				echo "<h3>$key</h3>";
				echo "<p>$descs[$key]</p>";
				foreach($rates[$key] as $length => $rate) {
					echo "<p class=\"rates\">$length minutes - \$$rate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
				}
				echo "<br>";
			}
 		  }	
	?>
	</div>
	<div id="services-3">
	<?php foreach($services as $key => $val) {
			if($val == 3) {
				echo "<h3>$key</h3>";
				echo "<p>$descs[$key]</p>";
				foreach($rates[$key] as $length => $rate) {
					echo "<p class=\"rates\">$length minutes - \$$rate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>";
				}
				echo "<br>";
			}
 		  }	
	?>	
	</div>
</div><!-- services -->