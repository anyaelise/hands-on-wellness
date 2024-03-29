<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />	
	<title>Hands On Wellness</title>
	<link rel="shortcut icon" type="image/png" href="/application/images/favicon.png" />	
	<link rel="stylesheet" type="text/css" href="/application/css/main.css" />
	<link rel="stylesheet" type="text/css" href="/application/css/smoothness/jquery-ui-1.9.1.custom.css">
	
	<script type="text/javascript" src="/application/js/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="/application/js/jquery-ui-1.9.1.custom.js"></script>
	
	<script type="text/javascript">
	var changeContent = function(page_id) {
		var new_content = "<?php echo site_url()."/main/";?>"+page_id;
		$('#page').load(new_content);
	};
	$(document).ready(function(){	
		changeContent('<?php echo $page_id; ?>');
		
		$( "#menu ul li" ).hover(
			function() {
				$( this ).addClass( "menu-hover" );
			},
			function() {
				$( this ).removeClass( "menu-hover" );
			}
		);
	 });
	 </script>
</head>

<body>

<div id="banner">
	<img src="/application/images/how_logo.png" alt="Hands On Wellness"/>
</div><!-- banner -->


<div id="menu">
	<ul>
	<?php foreach($menu->result() as $row): ?>	
	<?php echo "<li onClick=changeContent(\"$row->name\")>".anchor(site_url()."/main/index/$row->name", $row->title)."</li>"; ?>
	<?php endforeach ?>
	</ul>
</div><!-- menu -->
		
<div id="page">	
		
</div><!-- page -->



</body>
</html>