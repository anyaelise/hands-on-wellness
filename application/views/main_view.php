<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="icon" type="image/png" href="/application/images/favicon.png" />
	<link rel="stylesheet" type="text/css" href="/application/css/main.css" />
	<script type="text/javascript" src="/application/js/jquery-1.8.2.js"></script>
	<script type="text/javascript">
	
		var changeContent = function(page) {
			var new_content = "<?php echo site_url()."/main/";?>"+page;
			$('#right').load(new_content);
		};
	 
	</script>
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
		<?php echo "<li onClick=changeContent(\"$row->name\")>".anchor(site_url()."/main/index/#", $row->title); ?></li>
		<?php endforeach ?>
		</ul>
		</div><!-- menu -->
		
		<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by <a href="#">One Love Bodywork, LLC</a>.<br/>
		All Rights Reserved.<br/>
		</div><!-- footer -->
	</div><!-- left -->
	
	
	<div id="right">
	</div><!-- right -->	
	
		
</div><!-- page -->



</body>
</html>