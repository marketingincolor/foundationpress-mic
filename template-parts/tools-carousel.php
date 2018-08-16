<div class="small-10 small-offset-1 large-12 large-offset-0 cell">
	<div class="tools-carousel owl-carousel hide-for-small-only">

		<?php
		$args = array(
			'post_type'      => 'tools', 
			'posts_per_page' => -1,
			'orderby'        => 'menu_order',
			'order'          => 'ASC',
		);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		$icon_url = get_the_post_thumbnail_url(get_the_ID(),'full');
		?>

	  <div>
	  	<img src="<?php echo $icon_url; ?>" alt="<?php the_title(); ?>">
	  </div>

	  <?php endwhile; wp_reset_postdata(); ?>
	  
	</div>
	
	<div class="orbit tools-orbit show-for-small-only" role="region" aria-label="Tools we work with" data-orbit data-timer-delay="2000">
	  <div class="orbit-wrapper">
	    <div class="orbit-controls">
	      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span><i class="fas fa-chevron-left"></i></button>
	      <button class="orbit-next"><span class="show-for-sr">Next Slide</span><i class="fas fa-chevron-right"></i></button>
	    </div>
	    <ul class="orbit-container">
				<li class="is-active orbit-slide">
	    	  <ul>

		    		<?php
		    		$args = array(
		    			'post_type'      => 'tools', 
		    			'posts_per_page' => 5,
		    			'orderby'        => 'menu_order',
		    			'order'          => 'ASC',
		    		);
		    		$loop = new WP_Query( $args );
		    		while ( $loop->have_posts() ) : $loop->the_post();
		    		$icon_url = get_the_post_thumbnail_url(get_the_ID(),'full');
		    		?>
	    	  
	    	    	<li><img src="<?php echo $icon_url; ?>" alt="<?php the_title(); ?>"></li>

	    	  <?php endwhile; wp_reset_postdata(); ?>

    	    </ul>
    	  </li>

				<li class="orbit-slide">
	        <ul>

						<?php
						$count = 0;
						// Get total posts remaining in tools post type
						$args = array(
							'post_type'      => 'tools',
						);
						$query = new WP_Query( $args );
						$total_posts = $query->found_posts -5;
					  wp_reset_postdata();

					  // Query remaining tools posts
						$args = array(
							'post_type'      => 'tools', 
							'posts_per_page' => $total_posts,
							'offset'         => 5,
							'orderby'        => 'menu_order',
							'order'          => 'ASC',
						);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();

							$icon_url = get_the_post_thumbnail_url(get_the_ID(),'full');

							$count++;
						?>
	      
	        	<li><img src="<?php echo $icon_url; ?>" alt="<?php the_title(); ?>"></li>

	        	<?php
		        	if ($count % 5 == 0 && $count != $total_posts) {
	        			echo '</ul></li><li class="orbit-slide"><ul>';
	        		}
	        		if ($count % 5 != 0 && $count == $total_posts) {
	        			echo '</ul></li>';
	        		}

	        	?>

	        	<?php endwhile; wp_reset_postdata(); ?>
			</ul>
	  </div>
	</div>
</div>