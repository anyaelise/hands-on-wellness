<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>		
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
	<h3>Just Two Hands</h3>
	<p>Have a single therapist perform any four hands treatment.</p>
	<p class="rates">50% of four hands price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	</div>
</div><!-- services -->