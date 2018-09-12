<?php 
	/* Template Name: About */
	get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<section class="top-title">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="small-10 small-offset-1 medium-8 large-7 large-offset-0 cell">
				<blockquote class="orange">
					<p><?php the_field('about_heading_body'); ?></p>
					<a href="<?php the_field('about_heading_cta_link'); ?>" class="btn-arrow orange"><?php the_field('about_heading_cta_text'); ?> <i class="fas fa-arrow-right"></i></a>
				</blockquote>
			</div>
		</div>
	</div>
</section>

<section class="history relative">
	<img src="<?php the_field('about_history_image'); ?>" class="absolute show-for-medium" alt="marketing in color - our history">
	<div class="grid-container full hide-for-medium">
		<div class="grid-x">
			<div class="small-12 cell">
				<img src="<?php the_field('about_history_image'); ?>" alt="marketing in color - our history">
			</div>
		</div>
	</div>
	<div class="grid-container gray-container">
		<div class="grid-x relative">
			<div class="cell small-10 small-offset-1 medium-7 large-offset-0 gray-box">
				<div class="grid-x">
					<div class="cell medium-10">
						<h3><?php the_field('about_history_title'); ?></h3>
						<p><?php the_field('about_history_body'); ?></p>
						<a href="#" data-open="history-modal" class="btn-arrow orange"><?php the_field('about_history_cta_text'); ?> <i class="fas fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- History Modal -->
	<div class="reveal" id="history-modal" data-reveal>
	  <h3><?php the_field('about_history_title'); ?></h3>
	  	<?php the_content(); ?>
	  	<button class="close-button" data-close aria-label="Close modal" type="button">
	  	  <span aria-hidden="true">&times;</span>
	  	</button>
	  </div>
	</div>
</section>

<section class="team relative">
	<div class="grid-container">
		<div class="grid-x relative">
			<div class="cell">
				<div class="grid-x">
					<div class="cell medium-8 medium-offset-2 small-10 small-offset-1">
						<h3><?php the_field('about_team_title'); ?></h3>
						<p class="subhead"><?php the_field('about_team_body'); ?></p>
					</div>
					<?php get_template_part('template-parts/team-carousel'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="colors relative">
	<div class="grid-container">
		<div class="grid-x relative">
			<div class="cell small-10 small-offset-1 medium-6 medium-offset-1">
				<h3><?php the_field('about_colors_title'); ?></h3>
				<p class="subhead"><?php the_field('about_colors_body'); ?></p>
			</div>
			<div class="cell small-10 small-offset-1">
				<div class="grid-x grid-margin-x grid-margin-y">

					<?php
					$args = array(
						'post_type'      => 'colors', 
						'posts_per_page' => -1,
						'orderby'        => 'menu_order',
						'order'          => 'ASC',
					);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();

					$icon_url = get_the_post_thumbnail_url(get_the_ID(),'full');
					?>

					<div class="cell medium-6 center-mobile clearfix">
						<div class="grid-x grid-margin-x">
							<div class="medium-4 large-3 cell text-center">
								<img src="<?php echo $icon_url; ?>" alt="<?php the_title(); ?>">
							</div>
							<div class="medium-8 large-9 cell">
								<h4><?php the_title(); ?></h4>
								<?php the_content(); ?>
							</div>
						</div>
					</div>

					<?php endwhile; wp_reset_postdata(); ?>

				</div>
			</div>
		</div>
	</div>
</section>



<?php 
	endwhile;
  endif;
	get_footer();
?>