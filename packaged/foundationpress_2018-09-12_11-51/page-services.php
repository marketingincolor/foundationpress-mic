<?php 
	/* Template Name: Services */
	get_header();
?>

<section class="top-title">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-10 small-offset-1 medium-6 large-offset-0 cell">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="small-10 small-offset-1 medium-8 large-7 large-offset-0 cell">
				<blockquote class="orange">
					<p><?php the_field('services_heading_body'); ?></p>
					<a href="<?php the_field('services_heading_cta_link'); ?>" class="btn-arrow orange"><?php the_field('services_heading_cta_text'); ?> <i class="fas fa-arrow-right"></i></a>
				</blockquote>
			</div>
		</div>
	</div>
</section>

<section class="history services-history relative">
	<div class="graphic absolute show-for-medium">
		<img src="<?php the_field('services_approach_image'); ?>" class="absolute" alt="marketing in color <?php the_field('services_approach_title'); ?>">
	</div>
	<div class="grid-container full hide-for-medium">
		<div class="grid-x">
			<div class="small-12 cell">
				<img src="<?php the_field('services_approach_image'); ?>" alt="marketing in color - <?php the_field('services_approach_title'); ?>">
			</div>
		</div>
	</div>
	<div class="grid-container gray-container">
		<div class="grid-x relative">
			<div class="cell small-10 small-offset-1 medium-7 large-offset-0 gray-box">
				<div class="grid-x">
					<div class="cell small-12 medium-10">
						<h3><?php the_field('services_approach_title'); ?></h3>
						<p><?php the_field('services_approach_body'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="colors execute relative">
	<div class="grid-container">
		<div class="grid-x relative">
			<div class="cell small-10 small-offset-1 medium-6 medium-offset-1">
				<h3><?php the_field('services_excel_title'); ?></h3>
				<p class="subhead"><?php the_field('services_excel_body'); ?></p>
			</div>
			<div class="cell small-10 small-offset-1">
				<div class="grid-x grid-margin-x grid-margin-y">
					
					<?php
					$args = array(
						'post_type'      => 'excel', 
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

<?php get_footer(); ?>