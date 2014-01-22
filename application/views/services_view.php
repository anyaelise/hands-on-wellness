<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<body>

<div id="services">
	<h2>Full Body Treatments</h2>
	<dl>
	<?php foreach($services as $key => $val) {
			if($val == 1) {
				echo "<h3>$key</h3>";
				echo "<dt>$descs[$key]</dt>";
				foreach($rates[$key] as $length => $rate) {
					echo "<dd>$length minutes - \$$rate</dd>";
				}
			}
 		  }	
	?>
	</dl>
	<br>
	<h2>Targeted Treatments</h2>
	<dl>
	<?php 
		  foreach($services as $key => $val) {
			if($val == 2) {
				echo "<h3>$key</h3>";
				echo "<dt>$descs[$key]</dt>";
				foreach($rates[$key] as $length => $rate) {
					echo "<dd>$length minutes - \$$rate</dd>";
				}
			}
		  }
	?>
	</dl>
	<br>
	<h2>Premium Treatments</h2>
	<dl>
	<?php		
		  foreach($services as $key => $val) {
			if($val == 3) {
				echo "<h3>$key</h3>";
				echo "<dt>$descs[$key]</dt>";
				foreach($rates[$key] as $length => $rate) {
					echo "<dd>$length minutes - \$$rate</dd>";
				}
			}
		  }	
	?>
	</dl>	
	</div>
</div><!-- services -->