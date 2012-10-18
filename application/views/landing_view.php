<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="/application/css/landing.css" />
</head>

<body>

<div id="page" class="shadow">

	<div id="header">
		<div id="logo"><img src="/application/images/logo.png" alt="One Love Bodywork"/></div>	
	</div><!-- header -->
	
	<div id="menu">
		<ul>
		<?php foreach($query->result() as $row): ?>	
		<li><?php echo anchor("$row->name", $row->title); ?></li>
		<?php endforeach ?>
		</ul>
	</div><!-- menu -->
	
</div><!-- page -->

<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by <a href="#">One Love Bodywork, LLC</a>.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</body>
</html>