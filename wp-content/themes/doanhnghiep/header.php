<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>

	<!-- css -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/slick.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/animate.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.min.css">
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
		<div class="top_header">
			<div class="container">
				<div class="logo_site">
					<figure class="logo_light"><?php 
					if(has_custom_logo()){
						the_custom_logo();
					}
					else { ?> 
						<h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
					<?php } ?>
				</figure>	
			</div>
			<div class="wrap_float_r">
				<div class="tg_lang">
					<ul>
						<li><a href="#">EN</a></li>
						<li><a href="#">VI</a></li>
					</ul>
				</div>
				<div class="tg_nav_search">
					<div class="wrap_nav_primary">
						<div class="container">
							<nav class="nav nav_primary">
								<?php 
								$args = array('theme_location' => 'primary');
								?>
								<?php wp_nav_menu($args); ?>
							</nav>
						</div>
					</div>
					<div class="search_header">
						<form  role="search" method="get" id="searchform" action="<?php echo home_url('/');  ?>">
							<div class="wrap_search_header">
								<input type="text" value="" name="s" id="s" placeholder="Tìm kiếm">
								<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<section id="cpanel_aptica" class="section">
		<!-- The video -->
		<video autoplay muted loop playsinline id="myVideo">
			<source src="<?php echo BASE_URL;?>/video/heroVideo.mp4" type="video/webm" />
			</video>
			<div class="suggest_price">
				<ul>
					<li><a href="#">Nhận tư vấn</a></li>
					<li><a href="#">Xem báo giá</a></li>
				</ul>
			</div>
		</section>
	</header>