<?php 
	/* Template Name: Home */
	get_header();
?>

<section class="video-hero relative">
	<video autoplay="" playsinline loop="" muted="" preload="auto">
	  <source src="<?php the_field('hero_video'); ?>" type="video/mp4">
	  <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/home-hero.png" alt="Marketing in Color">
	</video>
	<a href="<?php echo site_url(); ?>" class="logo absolute show-for-medium"><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/white-logo.png" alt="<?php bloginfo('title'); ?>"></a>
	
	<aside class="meta absolute">
		<h1><?php the_field('hero_title'); ?></h1>
		<blockquote>
			<p><?php the_field('hero_body'); ?></p>
		  <a href="<?php the_field('hero_cta_link'); ?>" class="btn-arrow white"><?php the_field('hero_cta_text'); ?> <i class="fas fa-arrow-right"></i></a>
		</blockquote>
	</aside>
</section>

<section class="who">
	<div class="orange-bg hide-for-medium">
		<img src="<?php the_field('who_mobile_image'); ?>" alt="Marketing in Color Tampa,FL">
	</div>
	<div class="grid-container">
		<div class="grid-x relative">
			<div class="cell medium-8 gray-box small-10 small-offset-1 large-offset-0">
				<div class="grid-x">
					<div class="cell medium-8">
						<h3><?php the_field('who_title'); ?></h3>
						<p><?php the_field('who_body'); ?></p>
						<a href="<?php the_field('who_cta_link'); ?>" class="btn-arrow orange"><?php the_field('who_cta_text'); ?> <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<img src="<?php the_field('who_desktop_image'); ?>" class="absolute show-for-medium" alt="marketing in color who we are">
		</div>
	</div>
</section>

<section class="what">
	<div class="grid-container">
		<div class="grid-x grid-margin-x relative">
			<div class="medium-6 medium-offset-1 large-offset-0 cell orbit-bg relative">
			  <div class="absolute purple-box show-for-medium"></div>
				<div class="orbit" role="region" aria-label="What we do" data-orbit>
				  <div class="orbit-wrapper">
				    <ul class="orbit-container">
				      <li class="is-active orbit-slide">
				        <figure class="orbit-figure">
				          <img class="orbit-image" src="<?php bloginfo('template_directory'); ?>/dist/assets/images/what-we-do.png" alt="Space">
				        </figure>
				      </li>
				      <!-- <li class="orbit-slide">
				        <figure class="orbit-figure">
				          <img class="orbit-image" src="<?php bloginfo('template_directory'); ?>/dist/assets/images/what-we-do.png" alt="Space">
				        </figure>
				      </li>
				      <li class="orbit-slide">
				        <figure class="orbit-figure">
				          <img class="orbit-image" src="<?php bloginfo('template_directory'); ?>/dist/assets/images/what-we-do.png" alt="Space">
				        </figure>
				      </li> -->
				    </ul>
				  </div>
				  <nav class="orbit-bullets">
				    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
				    <!-- <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
				    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button> -->
				  </nav>
				</div>
			</div>
			<div class="medium-5 medium-offset-0 small-10 small-offset-1 cell">
				<h3><?php the_field('what_title'); ?></h3>
				<p><?php the_field('what_body'); ?></p>
				<a href="<?php the_field('what_cta_link'); ?>" class="btn-arrow orange"><?php the_field('what_cta_text'); ?> <i class="fas fa-arrow-right"></i></a>
			</div>
		</div>
	</div>
</section>

<section class="why" style="background-image:url(<?php the_field('why_background_image'); ?>);">
	<div class="grid-container relative">
		<div class="grid-x">
			<div class="medium-8 large-offset-0 large-6 small-10 small-offset-1 cell">
				<aside class="meta">
					<h3><?php the_field('why_title'); ?></h3>
					<p><?php the_field('why_body'); ?></p>
					<a href="<?php the_field('why_cta_link'); ?>" class="btn-arrow orange"><?php the_field('why_cta_text'); ?>  <i class="fas fa-arrow-right"></i></a>
				</aside>
			</div>
		</div>
	</div>
</section>

<section class="tools">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-6 medium-offset-3 small-10 small-offset-1 cell">
				<h3 class="text-center"><?php the_field('tools_title'); ?></h3>
				<p class="text-center subhead"><?php the_field('tools_body'); ?></p>
			</div>

			<?php get_template_part('template-parts/tools-carousel'); ?>
			
		</div>
	</div>
</section>

<?php get_footer(); ?>