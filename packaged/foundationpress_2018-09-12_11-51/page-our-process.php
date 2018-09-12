<?php 
	/* Template Name: Our Process */
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
					<p><?php the_field('process_heading_body'); ?></p>
					<a href="<?php the_field('process_heading_cta_link'); ?>" class="btn-arrow orange"><?php the_field('process_heading_cta_text'); ?> <i class="fas fa-arrow-right"></i></a>
				</blockquote>
			</div>
		</div>
	</div>
</section>

<section class="history process-strategize relative">
	<div class="graphic absolute show-for-medium">
		<img src="<?php the_field('process_strategize_image'); ?>" class="absolute" alt="marketing in color strategize">
	</div>
	<div class="grid-container full hide-for-medium">
		<div class="grid-x">
			<div class="small-12 cell">
				<img src="<?php the_field('process_strategize_image'); ?>" alt="marketing in color - strategize">
			</div>
		</div>
	</div>
	<div class="grid-container gray-container">
		<div class="grid-x relative">
			<div class="cell small-10 small-offset-1 medium-7 large-offset-0 gray-box">
				<div class="grid-x">
					<div class="cell small-12 medium-10">
						<h3><?php the_field('process_strategize_title'); ?></h3>
						<p><?php the_field('process_strategize_body'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="plan process-plan relative">
	<div class="graphic absolute show-for-medium">
		<img src="<?php the_field('process_plan_image'); ?>" class="absolute" alt="marketing in color - our plan">
	</div>
	<div class="grid-container full hide-for-medium">
		<div class="grid-x">
			<div class="small-12 cell">
				<img src="<?php the_field('process_plan_image'); ?>" alt="marketing in color - our plan">
			</div>
		</div>
	</div>
	<div class="grid-container gray-container">
		<div class="grid-x relative">
			<div class="cell small-10 small-offset-1 medium-7 medium-offset-4 gray-box">
				<div class="grid-x">
					<div class="cell medium-9 medium-offset-3 large-offset-2">
						<h3><?php the_field('process_plan_title'); ?></h3>
						<p><?php the_field('process_plan_body'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="history process-execute relative">
	<div class="graphic absolute show-for-medium">
		<img src="<?php the_field('process_execute_image'); ?>" class="absolute" alt="marketing in color execute">
	</div>
	<div class="grid-container full hide-for-medium">
		<div class="grid-x">
			<div class="small-12 cell">
				<img src="<?php the_field('process_execute_image'); ?>" alt="marketing in color - execute">
			</div>
		</div>
	</div>
	<div class="grid-container gray-container">
		<div class="grid-x relative">
			<div class="cell small-10 small-offset-1 medium-7 large-offset-0 gray-box">
				<div class="grid-x">
					<div class="cell small-12 medium-10">
						<h3><?php the_field('process_execute_title'); ?></h3>
						<p><?php the_field('process_execute_body'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="plan process-analyze relative">
	<div class="graphic absolute show-for-medium">
		<img src="<?php the_field('process_analyze_image'); ?>" class="absolute" alt="marketing in color analyze">
	</div>
	<div class="grid-container full hide-for-medium">
		<div class="grid-x">
			<div class="small-12 cell">
				<img src="<?php the_field('process_analyze_image'); ?>" alt="marketing in color - analyze">
			</div>
		</div>
	</div>
	<div class="grid-container gray-container">
		<div class="grid-x relative">
			<div class="cell small-10 small-offset-1 medium-7 medium-offset-4 gray-box">
				<div class="grid-x">
					<div class="cell medium-9 medium-offset-3 large-offset-2">
						<h3><?php the_field('process_analyze_title'); ?></h3>
						<p><?php the_field('process_analyze_body'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="history process-repeat relative">
	<div class="graphic absolute show-for-medium">
		<img src="<?php the_field('process_refine_image'); ?>" class="absolute" alt="marketing in color refine and repeat">
	</div>
	<div class="grid-container full hide-for-medium">
		<div class="grid-x">
			<div class="small-12 cell">
				<img src="<?php the_field('process_refine_image'); ?>" alt="marketing in color - refine and repeat">
			</div>
		</div>
	</div>
	<div class="grid-container gray-container">
		<div class="grid-x relative">
			<div class="cell small-10 small-offset-1 medium-7 large-offset-0 gray-box">
				<div class="grid-x">
					<div class="cell small-12 medium-10">
						<h3><?php the_field('process_refine_title'); ?></h3>
						<p><?php the_field('process_refine_body'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>