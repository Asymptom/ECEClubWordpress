<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<title><?php wp_title('-'); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200,600,700,900' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/logo-small.jpeg">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vendor/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vendor/slideshow.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav class="nav-container">
		<div id="logo-container"><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-big.jpg"></a></div>

		<div class="click-nav">
		  <ul class="no-js">
		    <li>
		      <a href="#" class="clicker">MENU</a>
		      <ul>
					<?php wp_nav_menu( array( 'orderby' => 'menu_order', 'theme_location' => 'secondary', 'menu_class' => 'nav-menu', 'container' => false, 'items_wrap' => '%3$s'  ) ); ?>
		      </ul>
		    </li>
		  </ul>
		</div>
		

		<div class="width-container">
			<ul class="all-navs">
				<?php wp_nav_menu( array( 'orderby' => 'menu_order', 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container' => false, 'items_wrap' => '%3$s'  ) ); ?>
			</ul>
		</div>

	</nav>

