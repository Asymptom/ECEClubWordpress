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
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/bootstrap.min.css" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>
		<div id="University_of_Toronto_Electrical___Computer_Eng" >
		<p>UofT Electrical & Computer Engineering Club</p>
	</div>
	<!-- Notice the tag below isn't closed it sould be closed in your main content -->
	<div id="wrap">
		<nav id="blue-bar" class="navbar navbar-inverse navbar-static-top" role="navigation">
			<a id="header-logo"  class="navbar-brand" href="<?php echo home_url();?>">
				<img id="ece-logo-image" src="<?php echo get_template_directory_uri(); ?>/images/ece_club_logo.png">
			</a>
			
			<div>
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="navbar-collapse collapse">
	<!-- 				==============================================
					============================================== -->
					<div class="nav navbar-nav">
					  <ul class="no-js">
					    <li class="less-padding">
					      <a href="#" class="clicker">MENU</a>
					      <ul class="nav navbar-nav">
								<?php wp_nav_menu( array( 'orderby' => 'menu_order', 'theme_location' => 'secondary', 'menu_class' => 'nav-menu', 'container' => false, 'items_wrap' => '%3$s'  ) ); ?>
					      </ul>
					    </li>
					  </ul>
					</div>
			

					<div id="dropdown-menu" class="width-container">
						<ul class="all-navs">
							<?php wp_nav_menu( array( 'orderby' => 'menu_order', 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container' => false, 'items_wrap' => '%3$s'  ) ); ?>
						</ul>
					</div>
				</div>
			</div>
		</nav>

