<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

		<main class="grid-container" style="margin-top:4rem;">
			<div class="grid-x">
				<div class="medium-8 medium-offset-2 cell">

					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', '' ); ?>
						
						
					<?php endwhile; ?>

				</div>
			</div>
		</main>
		<?php //get_sidebar(); ?>

<?php get_footer();
