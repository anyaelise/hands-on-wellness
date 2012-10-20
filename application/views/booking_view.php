		<div id="title">
			<?php echo "Make A Reservation"; ?>
		</div>
		<div id="booking">
			<?php form_open('booking/create_booking'); ?>
			Date: <input type="text" id="date" /> 
			Time: <input type="time" id="time" />
			<br />
			Type of Service: <select id="service">
								<?php foreach($services->result() as $row): ?>
								<option value="<?php echo $row->id;?>"><?php echo "$row->name, $row->length minutes, $row->rate";?></option>
								<?php endforeach ?>
							 </select>
			</form>
		</div>