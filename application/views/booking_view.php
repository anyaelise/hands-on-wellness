<div id="title">
	<h1><?php echo "Request A Reservation"; ?></h1>
	<p class="directions">Please customize your service(s) from the options below. A manager will be in contact with you to confirm your reservation.</p>
	<br>
</div><!-- title -->

<div id="booking">	
	<?php 
	echo validation_errors();

	echo form_open('main/booking/create');	
	$dropdown_default = "Select";
	echo "<p> First Name: ".form_input('first_name','')." Last Name: ".form_input('last_name', '')." </p>";
	echo "<p> Email: ".form_input('email','')."	Telephone: ".form_input('phone','')." </p>";
	
	$data = array();
	$data['name'] = "address";
	$data['id'] = "address";
	$data['size'] = 50; 
	echo "<p> Street Address: ".form_input($data)." </p>";
	
	echo "<p> Date: ".form_input('date','')."	Time: ".form_input('time','')." </p>";
	
	$service_array = array(); $i = 1;
	$service_array[0] = $dropdown_default;
	foreach($services->result() as $row) {
		$service_array[$i] = "$row->name, $row->length minutes, \$$row->rate";
		$i++;
	}
	echo "<p> Type of Service: ".form_dropdown('service', $service_array, 0)." </p>";
	
	$aromatherapy_array = array(); $i = 1;
	$aromatherapy_array[0] = $dropdown_default;
	foreach($aromatherapy->result() as $row) {
		$aromatherapy_array[$i] = "$row->name";
		$i++;
	}
	echo "<p> Aromatherapy Preference: ".form_dropdown('aromatherapy', $aromatherapy_array, 0)." </p>";
	
	$music_array = array(); $i=1;
	$music_array[0] = $dropdown_default;
	foreach($music->result() as $row) {
		$music_array[$i] = "$row->name";
		$i++;
	}
	echo "<p> Music Preference: ".form_dropdown('music', $music_array, 0)." </p>";
	
	$draping_array = array(); $i=1;
	$draping_array[0] = $dropdown_default;
	foreach($draping->result() as $row) {
		$draping_array[$i] = "$row->name";
		$i++;
	}
	echo "<p> Draping Preference: ".form_dropdown('draping', $draping_array, 0)." </p>";
	
	echo "<p> Allergy Considerations: If you have skin allergies or sensitive skin we recommend our hypoallergenic options. </p>"; 
	echo "<p>".form_radio('allergies', 0)."Please use hypoallergenic products.<br>";
	echo form_radio('allergies', 1)."Regular products are fine. </p>";
	
	echo "<p>".form_submit('booking_submit', "Request Reservation")." </p>";	
	echo "</form>";
	?>
</div><!-- booking -->