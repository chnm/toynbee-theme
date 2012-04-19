<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<link href="http://fonts.googleapis.com/css?family=Lato:300,300italic|Josefin+Slab:300,300italic|Vollkorn:400italic,700italic,400,700" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 8]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="wrap">
	
	<header>
	
	<div id="title"><h1><a href="<?php bloginfo( 'url' ); ?>">Toynbee Prize Foundation</a></h1></div>
	
		<nav>
		
			<?php wp_nav_menu( array ('menu' => 'Home Menu')); ?>
		
		</nav>
	
	</header>
	
	<section id="content" <?php post_class(); ?>>