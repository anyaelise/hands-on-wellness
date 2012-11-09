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
			$("#booking").tabs();
			$( "#date" ).datepicker({
				inline: true
			});
			<?php if($errors == 1) {
				echo "\$(\"#validation_errors\").addClass(\"ui-state-error\")";
			}
			?>	
		});
	 });
	</script>
</head>

<body>

<div id="booking">	
	<ul>
		<li><a href="#booking-1">Request a Reservation</a></li>
	</ul>
	<br>
	<p class="directions">Please supply the information requested below. All fields are required.</p>
	<div id="validation_errors" class="ui-corner-all">
	<?php 
	echo validation_errors();
	?>
	</div><!-- validation_errors -->
	
	<?php
	echo form_open('main/booking/create');
	$dropdown_default = "";
	$data = array();	
	?>
	
	<div id="basic_info">
	<?php
	echo "<p>".form_label('First Name: ',first_name).form_label('Last Name: ',last_name)."&nbsp;".form_label('Telephone: ',phone)."</p>";
	echo "<p>".form_input('first_name',set_value('first_name')).form_input('last_name', set_value('last_name')).form_input('phone',set_value('phone'))."</p>";
	
	echo "<p>".form_label('Street Address (of the location for the appointment): ',address)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".form_label('Email: ',email);	
	$data['name'] = "address";
	$data['id'] = "address";
	$data['size'] = 67;
	$data['value'] = set_value('address');
	echo "<p>".form_input($data);
	
	$data['name'] = "email";
	$data['id'] = "email";
	$data['size'] = 27;
	$data['value'] = set_value('email');
	echo form_input($data)."</p>";
	
	$data['name'] = "date";
	$data['id'] = "date";
	$data['size'] = 20;
	$data['value'] = set_value('date');
	echo "<p>".form_label('Date: ',date)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo form_label('Time: ',time)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".form_label('Type of Service: ',service);
	
	echo "<p>".form_input($data).form_input('time',set_value('time'));
	
	$service_array = array(); $i = 1;
	$service_array[0] = $dropdown_default;
	foreach($services->result() as $row) {
		$service_array[$i] = "$row->name, $row->length minutes, \$$row->rate";
		$i++;
	}
	echo form_dropdown('service', $service_array, 0)." </p>";
	echo "<br>";
	?>
	</div><!-- basic_info -->
	
	<p class="directions">Please customize your service from the options below.</p>
	<div id="customizations">
	<?php
	$aromatherapy_array = array(); $i = 1;
	$aromatherapy_array[0] = $dropdown_default;
	foreach($aromatherapy->result() as $row) {
		$aromatherapy_array[$i] = "$row->name";
		$i++;
	}
	echo "<p> ".form_label('Aromatherapy Preference: ',aromatherapy).form_dropdown('aromatherapy', $aromatherapy_array, 0)." </p>";
	
	$music_array = array(); $i=1;
	$music_array[0] = $dropdown_default;
	foreach($music->result() as $row) {
		$music_array[$i] = "$row->name";
		$i++;
	}
	echo "<p> ".form_label('Music Preference: ',music)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".form_dropdown('music', $music_array, 0)." </p>";
	
	$draping_array = array(); $i=1;
	$draping_array[0] = $dropdown_default;
	foreach($draping->result() as $row) {
		$draping_array[$i] = "$row->name";
		$i++;
	}
	echo "<p> ".form_label('Draping Preference: ',draping)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".form_dropdown('draping', $draping_array, 0)." </p>";
	?>
	</div><!-- customizations -->
	
	<br>
	<p class="directions"> If you have skin allergies or sensitive skin we recommend our hypoallergenic options. </p>
	<div id="allergy_info">
	<?php 
	echo "<p>".form_radio('allergies', 0)."Please use hypoallergenic products.<br>";
	echo form_radio('allergies', 1)."Regular products are fine. </p>";
	
	echo "<br>";
	?>
	</div><!-- allergy_info -->
	
	<div id="submit_button">
	<?php
	echo "<p>".form_submit('booking_submit', "Request Reservation")." </p>";	
	echo "</form>";
	?>
	</div><!-- submit_button -->
</div><!-- booking -->