<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>

	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>/images/favicon.ico">
	<!-- css -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/slick.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/animate.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/cube.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
	<!-- js -->
	<script src="<?php echo BASE_URL; ?>/js/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>


<body <?php body_class() ?>>
 
	<div class="bg_opacity"></div>
	
		<div id="menu_mobile_full">
			<nav class="mobile-menu">
				<p class="close_menu"><span><i class="fa fa-times" aria-hidden="true"></i></span></p>
				<?php 
				$args = array('theme_location' => 'menu_mobile');
				?>
				<?php wp_nav_menu($args);?>
			</nav>
		</div>

	<header class="header">
	<div class="icon_mobile_click cross menu--1">
			<label>
				<input type="checkbox" class="checkbox_svb">
				<svg class="ham1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" >
					<path class="line--1" d="M0 40h62c13 0 6 28-4 18L35 35" />
					<path class="line--2" d="M0 50h70" />
					<path class="line--3" d="M0 60h62c13 0 6-28-4-18L35 65" />
				</svg>
			</label>
		</div>
		<div class="logo_site">
			<figure class="logo_light"><?php 
					if(has_custom_logo()){
						the_custom_logo();
					}
					else { ?> 
						<h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
					<?php } ?>
			</figure>
			<figure class="logo_dark"><a href="<?php echo home_url(); ?>"><img src="<?php echo BASE_URL; ?>/images/logo_dark.png"></a></figure>		
		</div>
	</header>