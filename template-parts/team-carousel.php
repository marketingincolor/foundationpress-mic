<div class="small-10 small-offset-1 cell">
	<div class="team-carousel owl-carousel">
	<?php
	/**
	 * Custom display of the Team List Component, meant for multiple uses.
	 *
	 */
	$parent_id = get_id_by_slug('about');
	$args = array( 'post_type' => 'page', 'post_parent' => $parent_id, 'orderby' => 'menu_order', 'order' => 'ASC' );
	$show_team = get_children( $args );
	foreach ( $show_team as $team ) { ?>
		<?php
		$current_id = get_post_meta( $team->ID, 'link_user_id', true );
		//$current_email = get_the_author_meta( 'user_email', $current_id );
		$current_page = $team->post_name;
		$current_position = get_the_author_meta( 'position', $current_id );
		$current_tw = get_the_author_meta( 'twitter', $current_id );
		$current_li = get_the_author_meta( 'linkedin', $current_id );
		$current_fb = get_the_author_meta( 'facebook', $current_id );
		$current_tw = get_the_author_meta( 'twitter', $current_id );
		$current_tw = get_the_author_meta( 'twitter', $current_id );
		$alt_image = get_the_author_meta( 'alternate', $current_id );
		?>
		
			<div class="team-member relative">
				<div class="team-member-item team-image">

					<?php echo get_the_post_thumbnail($team->ID); ?>
					<?php if ( ! empty( $alt_image ) ) {
						echo wp_get_attachment_image( $alt_image, 'post-thumbnail',"",array('class' => 'alt-img absolute'));
					} else {
						echo get_the_post_thumbnail($team->ID,array('class' => 'alt-img'));
					} ?>

				</div>
				<div class="team-member-item team-member-meta absolute">
					<h5><?php echo $team->post_title; ?></h5>
					<h6><?php if ( ! empty( $current_position ) ) { echo $current_position; } ?></h6>
				</div>
			</div>

	<?php } ?>
	</div>
</div>
