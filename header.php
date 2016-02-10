<!doctype html>
<html>
	<head>
		<title></title>
		<?php wp_head(); ?>
	</head>
	<body>
		<main>
			<a href="<?php echo home_url(); ?>"><div class="headerlogo"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
			</div></a>
			<nav class="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
				
			</nav>