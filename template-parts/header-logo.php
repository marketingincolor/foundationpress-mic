<?php if (!is_front_page()) { ?>

	<section class="page-header">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-12 cell">
					<a href="<?php echo site_url(); ?>" class="logo"><img src="<?php bloginfo('template_directory'); ?>/src/assets/images/gray-logo.png" alt="<?php bloginfo('title'); ?>"></a>
				</div>
			</div>
		</div>
	</section>
	
<?php } ?>