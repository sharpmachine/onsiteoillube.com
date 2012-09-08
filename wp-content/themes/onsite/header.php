<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<!--[if lte IE 8]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if lte IE 8]>
<script src="<?php bloginfo('template_directory'); ?>/js/selectivizr-min.js"></script>
<![endif]-->

<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Metrophobic&v1' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/screen.css" media="screen, projection">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/print.css" media="print">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/smm-style.css" media="screen, projection">
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie.css" media="screen, projection"><![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<header <?php body_class(); ?>>
			<div id="logo">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/oilcan-logo.png" width="220" height="102" alt="Onsite Logo"></a>
			</div>
			<nav>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</nav>
			<div class="title">
				<?php if (is_home()): ?>
					<h1>Service. Pricing. Convenience.</h1>
					<h2>No one does it better.</h2>
				<?php else: ?>
					<h1><?php wp_title(''); ?></h1>
					<h2><?php meta('subtitle'); ?></h2>
				<?php endif; ?>
			</div>			
		</header>
