<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://use.typekit.net/dtf4wat.css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<!-- Desktop/Tablet Menu -->
	<nav class="left-menu" role="navigation">
		<button id="hamburger" class="hamburger hamburger--arrowturn" type="button" title="Open Menu">
		  <span class="hamburger-box">
		    <span class="hamburger-inner"></span>
		  </span>
		</button>
		<!-- Nav Menu Items -->
		<ul class="nav-menu">
			<li><a href="/">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/services">Services</a></li>
			<li><a href="/contact-us">Contact Us</a></li>
		</ul>
	</nav>

	<!-- Mobile Menu -->
	<nav class="mobile-menu">
		<div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
		  <div class="burger-bar">
		  	<button id="top-hamburger-slide-down" class="hamburger hamburger--arrowturn" type="button" title="Open Menu">
		  	  <span class="hamburger-box">
		  	    <span class="hamburger-inner"></span>
		  	  </span>
		  	</button>
		  </div>
		  <div class="title-bar-title">
		  	<a href="<?php echo site_url(); ?>" class="logo">
		  		<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/white-logo.png" alt="<?php bloginfo('title'); ?>">
		  	</a>
		  </div>
		</div>
	</nav>

	<div class="menu-logo-mobile absolute show-for-small-only">
		<div class="mobile-menu-icon">
			<button id="top-hamburger" class="hamburger hamburger--arrowturn <?php if (!is_page_template('front-page.php')) { echo 'not-home'; } ?>" type="button" title="Open Menu">
			  <span class="hamburger-box">
			    <span class="hamburger-inner"></span>
			  </span>
			</button>
		</div>
		<div class="mobile-logo">
			<?php if (is_page_template('front-page.php')) { ?>

			  <a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/white-logo.png" alt="<?php bloginfo('title'); ?>"></a>

			<?php }else{ ?>

			  <a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/gray-logo.png" alt="<?php bloginfo('title'); ?>"></a>

			<?php } ?>
		</div>
	</div>

	<?php get_template_part('template-parts/header-logo'); ?>
