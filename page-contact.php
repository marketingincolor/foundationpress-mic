<?php 
	/* Template Name: Contact */
	get_header();
?>

<section class="top-title">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<h1>Contact Us</h1>
			</div>
			<div class="small-10 small-offset-1 medium-8 large-7 large-offset-0 cell">
				<blockquote class="orange">
					<p>You bring your black and white ideas. We’ll bring the color. And let’s see what we can accomplish together.</p>
				</blockquote>
			</div>
		</div>
	</div>
</section>

<section class="contact-form relative">
	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/contact-map.png" class="absolute show-for-medium" alt="marketing in color - contact us">
	<div class="grid-container full hide-for-medium">
		<div class="grid-x">
			<div class="small-12 cell">
				<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/contact-map.png" class="hide-for-medium" alt="marketing in color - contact us">
			</div>
		</div>
	</div>
	<div class="grid-container gray-container">
		<div class="grid-x">
			<div class="cell small-10 small-offset-1 medium-7 large-offset-0 gray-box">
				<div class="grid-x">
					<div class="cell medium-11">
						<?php echo do_shortcode('[ninja_form id=1]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>