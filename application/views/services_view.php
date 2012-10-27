<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	
	<title>One Love Bodywork</title>

	<link rel="icon" type="image/png" href="/application/images/favicon.png" />
	
	<link rel="stylesheet" type="text/css" href="/application/css/main.css" />
	<link href="/application/css/redmond/jquery-ui-1.9.1.custom.css" rel="stylesheet">
	
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

<div id="title">
	<h1><?php echo "List of Services"; ?></h1>
</div><!-- title -->

<div id="services">
	<ul>
		<li><a href="#services-1">Signature Four Hand Services</a></li>
		<li><a href="#services-2">Targeted Four Hand Services </a></li>
		<li><a href="#services-3">Solo Therapist Services</a></li>
	</ul>
	<div id="services-1"> 
	<?php foreach($services->result() as $row) {
			echo "$row->name <br>";
 		  }	
	?>
	</div>
	<div id="services-2">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.</div>
	<div id="services-3">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
</div><!-- services -->