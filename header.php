<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Sunny K">
	<meta name="description" content="Sunny K Makeup Artist and Creative Hair Stylist">
	<meta name="keywords" content="Sunny K,Makeup Artist,Hair Stylist">
	<title>Sunny K - Makeup Artist and Creative Hair Stylist</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/main.css" type="text/css">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' type='text/css'>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-responsive-navbar" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo get_option('home'); ?>"><span class="title">Sunny K</span><span class="desc">Makeup Artist and Creative Hair Stylist</span></a>
				</div>

				<div class="collapse navbar-collapse" id="bs-responsive-navbar">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'sort_column' => 'menu_order', 'container' => false, 'menu_class' => 'nav navbar-nav' ) ); ?>
				</div>

				<div class="collapse navbar-collapse" id="bs-navbar-collapse">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'sort_column' => 'menu_order', 'container' => false, 'menu_class' => 'nav navbar-nav' ) ); ?>
				</div>
			</div>
		</nav>
	</header>
