<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="/application/css/main.css" />
</head>

<body>

<div id="page" class="shadow">
	<div id="left">
		<div id="logo">
		<img src="/application/images/logo_small.png" alt="One Love Bodywork"/>
		</div><!-- logo -->
		
		<div id="menu">
		<ul>
		<?php foreach($menu->result() as $row): ?>	
		<li><?php echo anchor("$row->name", $row->title); ?></li>
		<?php endforeach ?>
		</ul>
		</div><!-- menu -->
		
		<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by <a href="#">One Love Bodywork, LLC</a>.<br/>
		All Rights Reserved.<br/>
		</div><!-- footer -->
	</div><!-- left -->
	
	<div id="right">
		<div id="title">
			<?php echo $title; ?>
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
	</div>
	

		
</div><!-- page -->



</body>
</html>