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
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TLNW5X');</script>
		<!-- End Google Tag Manager -->

		<!-- Load Typekit fonts Asynchronously -->
		<script>
		  (function(d) {
		    var config = {
		      kitId: 'dtf4wat',
		      scriptTimeout: 3000,
		      async: true
		    },
		    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		  })(document);
		</script>
		<!-- End Typekit Fonts -->
		
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TLNW5X"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

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
			<li><a href="/our-process">Our Process</a></li>
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
