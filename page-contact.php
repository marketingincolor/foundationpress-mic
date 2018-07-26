<?php 
	/* Template Name: Contact */
	get_header();
?>

<section class="top-title">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-12 cell">
				<h1>Contact Us</h1>
			</div>
			<div class="medium-8 cell">
				<blockquote class="orange">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum adipisci dolores vitae harum repellat quasi ad corrupti sed enim ipsam rem maiores dolorem at.</p>
				</blockquote>
			</div>
		</div>
	</div>
</section>

<section class="contact-form relative">
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell medium-7 gray-box">
				<div class="grid-x">
					<div class="cell medium-10">
						<?php echo do_shortcode('[ninja_form id=1]'); ?>
						<a href="#" class="btn-arrow white">Submit Form <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<img src="<?php bloginfo('template_directory'); ?>/src/assets/images/contact-map.png" class="absolute" alt="marketing in color who we are">
</section>


<?php get_footer(); ?>