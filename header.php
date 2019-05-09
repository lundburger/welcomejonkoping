<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/style.css'?>">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<title>Welcome Jönköping</title>	
<?php wp_head(); ?>
</head>

<body>
	<header>
		<div class="logo">
			<h2>My Logo</h2>
		</div>
		<div class="menu">
			<?php wp_nav_menu('header-menu') ?>
		</div>
	</header>
