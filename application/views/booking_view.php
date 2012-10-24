<div id="title">
	<h1><?php echo "Request A Reservation"; ?></h1>
	<p class="directions">Please customize your service(s) from the options below. A manager will be in contact with you to confirm your reservation.</p>
	<br>
</div><!-- title -->
<div id="booking">
	<?php form_open('booking/create_booking');	
	echo "<p> First Name: ".form_input('first_name','')." Last Name: ".form_input('last_name', '')." </p>";
	echo "<p> Email: ".form_input('email','')."	Telephone: ".form_input('phone','')." </p>";
	$data = array();
	$data['name'] = "address";
	$data['id'] = "address";
	$data['size'] = 50; 
	echo "<p> Street Address: ".form_input($data)." </p>";
	echo "<p> Date: ".form_input('date','')."	Time: ".form_input('time','')." </p>";
	$service_array = array(); $i = 1;
	$service_array[0] = "Select";
	foreach($services->result() as $row) {
		$service_array[$i] = "$row->name, $row->length minutes, \$$row->rate";
		$i++;
	}
	echo "<p> Type of Service: ".form_dropdown('service', $service_array);
	Type of Service: <select id="service">
						<?php foreach($services->result() as $row): ?>
						<option value="<?php echo $row->id;?>"><?php echo "$row->name, $row->length minutes, \$$row->rate";?></option>
						<?php endforeach ?>
					 </select>
	</form>
	<br>
	Aromatherapy Preference: <select id="aromatherapy"></select>
	<br>
	Music Preference: <select id="music"></select>
	<br>
	Draping Preference: <select id="draping"></select>
	<br>
	Allergy Considerations: If you have skin allergies or sensitive skin we recommend our hypoallergenic options. 
	<br>
	<input type="radio" name="allergies" value="0">Please use hypo-allergenic products.
	<input type="radio" name="allergies" value="1">Regular products are fine.
	</p>
</div><!-- booking -->