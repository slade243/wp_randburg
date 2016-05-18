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
				<div class="mobile-menu-btn"></div>
				<div class="social-media-links">
					<a href="https://twitter.com/search?q=randburgUK&src=typd" target="_blank">
						<img src="<?php echo get_template_directory_uri() .'/images/icons/twitter.svg'; ?>" alt="Custom image" class="social-media-images" />
					</a>
					<a href="https://uk.linkedin.com/in/randburgelectrical" target="_blank">
						<img src="<?php echo get_template_directory_uri() .'/images/icons/linkedin.svg'; ?>" alt="Custom image" class="social-media-images" />
					</a>
				</div>
				<div class=topIcons>
					<a href="tel:02089162297">
						<div class="topBar-contact" id="phone">
							<span>+44 (0)208 916 2297</span>
						</div>
					</a>
					<a href="mailto:office@randburg.co.uk">
						<div class="topBar-contact" id="mail">
							<span>office@randburg.co.uk</span>
						</div>
					</a>
				</div>
			</div>
			<div id="header">
				<img src="<?php echo get_template_directory_uri() .'/images/randburg-logo.png'; ?>" alt="Custom image" class="logo" />
				<?php wp_nav_menu(array('menu' => 'top_navigation')); ?>
			</div>

			<aside id="mobile-menu">
				<span class="close"></span>
				<?php wp_nav_menu(array('menu' => 'top_navigation')); ?>
			</aside>
