<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	
	<title>One Love Bodywork - Your four hands massage specialists</title>
		
	<script type="text/javascript">
	$(document).ready(function(){	
		var draping = new Array();
		draping[0] = "";
		<?php
		$i=1;
		foreach($draping->result() as $row) {
			echo "draping[$i] = \"$row->desc\";\n";
			$i++;
		}
		?>
		$(function() {
			$("#booking").tabs();
			$( "#date" ).datepicker({
				inline: true
			});			
			$("select option").attr( "title", "" );
   	 		$("#draping option").each(function(i){
      			this.title = draping[i];
    		})
    		//$("#draping option").tooltip({ show: { effect: "blind", duration: 800 } }, {track: true});
    		$("#draping option").tooltip({position: {my: "left+5 bottom", at: "right top", collision: "flipfit" }});
    		$("#basic_info label").last().css('font-style', 'italic');
    		
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
	<p class="directions">Please supply the information requested below. <span style="color:red">All fields are required.</span></p>
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
	$data['name'] = "email";
	$data['id'] = "email";
	$data['size'] = 27;
	$data['value'] = set_value('email');
	echo "<p>".form_label('First Name: ',first_name).form_label('Last Name: ',last_name)."&nbsp;".form_label('Telephone: ',phone).form_label('Email: ',email)."</p>";
	echo "<p>".form_input('first_name',set_value('first_name')).form_input('last_name', set_value('last_name')).form_input('phone',set_value('phone')).form_input($data)."</p>";
	
	echo "<p style=\"display:inline;margin-left:20px;padding:0\">".form_radio('location', 0)."In-call &nbsp;&nbsp;&nbsp;&nbsp;".anchor("http://www.educatinghands.com/", "Educating Hands Professional Clinic").", 3883 Biscayne Blvd, Miami FL 33137 <span style=\"color:green\">(additional $20)</span><br></p>";
	echo "<p style=\"display:inline;margin-left:20px;padding:0\">".form_radio('location', 1)."Out-call &nbsp;&nbsp; </p>";
	
	echo "<p style=\"display:inline;\" class=\"nopadding\">".form_label('Street Address: ',address);	
	$data['name'] = "address";
	$data['id'] = "address";
	$data['size'] = 75;
	$data['value'] = set_value('address');
	echo "<p style=\"display:inline\">".form_input($data);
	
	$data['name'] = "date";
	$data['id'] = "date";
	$data['size'] = 20;
	$data['value'] = set_value('date');
	echo "<p>".form_label('Date: ',date)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo form_label('Time Window:',time)."&nbsp;".form_label('Type of Service: ',service);
	
	$time_array = array();
	$time_array[0] = $dropdown_default;
	$start_time = 50400;
	$end_time = 61200;
	for($i=1; $i<=10; $i++) {
		$time_array[$i] = date("h:ia", $start_time)." - ".date("h:ia", $end_time);
		$start_time += 3600;
		$end_time += 3600;
	}
	
	echo "<p>".form_input($data).form_dropdown('time',$time_array,0);
	
	$service_array = array(); $i = 1;
	$service_array[0] = $dropdown_default;
	foreach($services->result() as $row) {
		if($row->priority == 3) {
			$service_array[$i] = "*$row->name, $row->length minutes, \$$row->rate";
		}
		else {
			$service_array[$i] = "$row->name, $row->length minutes, \$$row->rate";
		}
		$i++;
	}
	echo form_dropdown('service', $service_array, 0)." </p>";
	echo "<p style=\"text-align: right;\"> ".form_checkbox('single', 'single', FALSE).form_label('Make it a single therapist session for 1/2 the price')."<br>".form_label('*Services marked by a \'*\' not included');
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
		$draping_array[$i]  = "$row->name";
		$i++;
	}
	$js = 'id="draping"';
	echo "<p> ".form_label('Draping Preference: ',draping)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".form_dropdown('draping', $draping_array, 0, $js)." </p>";
	echo "<p> ".form_checkbox('paraffin', 'paraffin', FALSE).form_label(' Add paraffin treatment ($20)');
	?>
	</div><!-- customizations -->
	
	<br>
	<p class="directions"> If you have skin allergies or sensitive skin we recommend our hypoallergenic options. </p>
	<div id="allergy_info">
	<?php 
	echo "<p>".form_radio('allergies', 0)."Please use hypoallergenic products.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo form_radio('allergies', 1)."Regular products are fine. </p>";
	
	echo "<br>";
	?>
	</div><!-- allergy_info -->
	<p class="directions">Special Request(s):</p>
	<div id="notes">
		<?php
		$data['name'] = "requests";
		$data['id'] = "requests";
		$data['rows'] = 2;
		$data['cols'] = 70;
		$data['value'] = set_value('requests');
		echo "<p>".form_textarea($data)."</p>";
		?>
	</div>
	
	<div id="submit_button">
	<?php
	echo "<p>".form_submit('booking_submit', "Request Reservation")." </p>";	
	echo "</form>";
	?>
	</div><!-- submit_button -->
	
	
</div><!-- booking -->