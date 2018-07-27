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

	<nav class="left-menu" role="navigation">
		
	</nav>

	<?php get_template_part('template-parts/header-logo'); ?>
