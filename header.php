<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if( is_singular() && pings_open( get_queried_object() )): ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif;  ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site cf">
		<a class="skip-link sr" href="#content"><?php esc_html_e( 'Skip to content', 'bellaworks' ); ?></a>

		<?php  /*
		<header id="masthead" class="site-header" role="banner">
			<div class="wrapper">


				<?php if( get_custom_logo() ) { ?>
					<div class="logo">
						<?php the_custom_logo(); ?>
					</div>
				<?php } else { ?>
					<h1 class="logo">
						<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
					</h1>
				<?php } ?>



				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'bellaworks' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div><!-- wrapper -->
		</header>
		 */ ?>
		 <!-- #masthead -->

		 <header id="masthead" class="site-header" role="banner">
		 	<div id="right-full-screen-menu-container" class="custom-top-wrap">
		 		<div class="custom-top">
		 			<div class="wrapper">

		 				<?php if(is_home()) { ?>
		 					<h1 class="logo">
		 						<a href="<?php bloginfo('url'); ?>">
		 							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
		 						</a>
		 					</h1>
		 				<?php } else { ?>
		 					<div class="logo">
		 						<a href="<?php bloginfo('url'); ?>">
		 							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
		 						</a>
		 					</div>
		 				<?php } ?>

		 				<nav id="site-navigation" class="main-navigation" role="navigation">
		 					<button class="menu-toggle" id="toggleMenu" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
		 					<?php //wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_id' => 'primary-menu' ) ); ?>
		 				</nav><!-- #site-navigation -->

		 				<div class="burger">
		 					<span></span>
		 				</div>

		 				<nav class="mobilemenu">
		 					<?php wp_nav_menu( array( 
		 						'container' => 'ul',
		 						'theme_location' => 'primary-menu',
		 						'menu_class'     => 'mobilemain',
		 					)); ?>
		 				</nav>



		 			</div><!-- wrapper -->
		 		</div>

		 		</div>

		 	</div>
		 </header><!-- #masthead -->

		 <div id="content" class="site-content wrapper">
