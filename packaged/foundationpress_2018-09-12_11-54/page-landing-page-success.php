<?php 
	/* Template Name: Landing Page Success */
	get_header('landing-page');
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="success">
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell medium-10 medium-offset-1 large-8 large-offset-2">
				<h3 class="text-center" style="margin-bottom:50px"><?php the_field('success_heading'); ?></h3>
				<ul class="social-icons">

					<?php if( have_rows('social_icons') ): ?>
						<?php while( have_rows('social_icons') ): the_row(); 

							$link = get_sub_field('link');
							$icon = get_sub_field('font_awesome');

							?>
							
							<li><a href="<?php echo $link; ?>"><?php echo $icon; ?></a></li>

						<?php endwhile; ?>
					<?php endif; ?>

				</ul>
			</div>
		</div>
	</div>
</section>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer('landing-page');