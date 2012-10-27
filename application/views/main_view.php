<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		var changeContent = function(page_id) {
			var new_content = "<?php echo site_url()."/main/";?>"+page_id;
			$('#right').load(new_content);
		};
		
		changeContent('<?php echo $page_id; ?>');
	 });
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
		<?php echo "<li onClick=changeContent(\"$row->name\")>".anchor(site_url()."/main/index/$row->name", $row->title)."</li>"; ?>
		<?php endforeach ?>
		</ul>
		</div><!-- menu -->
		
		<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by <?php echo anchor(site_url()."/main/index/about", "One Love Bodywork, LLC");?><br/>
		All Rights Reserved.<br/>
		</div><!-- footer -->
	</div><!-- left -->
	
	
	<div id="right">
	</div><!-- right -->	
	
		
</div><!-- page -->



</body>
</html>