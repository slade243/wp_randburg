<html lang="en">
	<head>
		<meta charset="uft-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Randburg</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	</head>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<body>
		<div id="wrapper">
			<div id="topBar">
				<div class=topIcons>
					<div class="topBar-contact">PhoneTest</div>
					<div class="topBar-contact">MailTest</div>
				</div>
			</div>
			<div id="header">
				<img src="<?php echo get_template_directory_uri() .'/images/randburg-logo.png'; ?>" alt="Custom image" class="logo" />
				<?php wp_nav_menu(array('menu' => 'top_navigation')); ?>
			</div>
