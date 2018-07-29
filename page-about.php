<?php 
	/* Template Name: About */
	get_header();
?>

<section class="top-title">
	<div class="grid-container">
		<div class="grid-x">
			<div class="small-12 cell">
				<h1>About MIC</h1>
			</div>
			<div class="medium-8 cell">
				<blockquote class="orange">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum adipisci dolores vitae harum repellat quasi ad corrupti sed enim ipsam rem maiores dolorem at.</p>
					<a href="#" class="btn-arrow orange">Let's work together <i class="fas fa-arrow-right"></i></a>
				</blockquote>
			</div>
		</div>
	</div>
</section>

<section class="history relative">
	<div class="graphic absolute">
		<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/about-history.png" class="absolute" alt="marketing in color - our history">
	</div>
	<div class="grid-container">
		<div class="grid-x relative">
			<div class="cell medium-8 gray-box">
				<div class="grid-x">
					<div class="cell medium-8">
						<h3>Our History</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tortor erat, facilisis vitae maximus sed, facilisis a nibh. Pellentesque eu dolor vitae lectus hendrerit convallis. Phasellus tincidunt et est sodales gravida. Praesent lacinia commodo luctus. Vestibulum nec dui eros. Cras vel nisl cursus, eleifend enim non, sodales elit. Morbi lectus eros, posuere in auctor vitae, laoreet in nibh.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="team relative">
	<div class="grid-container">
		<div class="grid-x relative">
			<div class="cell">
				<div class="grid-x">
					<div class="cell medium-8 medium-offset-2">
						<h3>Meet the Team</h3>
						<p class="subhead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tortor erat, facilisis vitae maximus sed, facilisis a nibh. Pellentesque eu dolor vitae lectus hendrerit convallis. Phasellus tincidunt et est sodales gravida. Praesent lacinia commodo luctus.</p>
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
			<div class="cell medium-8">
				<div class="grid-x">
					<div class="cell medium-8">
						<h3>Our True Colors</h3>
						<p class="subhead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tortor erat, facilisis vitae maximus sed, facilisis a nibh.</p>
					</div>
				</div>
			</div>
			<div class="cell medium-12">
				<div class="grid-x grid-margin-x grid-margin-y">
					<div class="cell medium-6">
						<span class="icon left"><img src="<?php bloginfo('template_directory'); ?>/src/assets/images/partner.svg" alt="marketing in color partner"></span>
						<h4>Be a Partner</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tortor erat, facilisis vitae maximus sed, facilisis a nibh.</p>
					</div>
					<div class="cell medium-6">
						<span class="icon left"><img src="<?php bloginfo('template_directory'); ?>/src/assets/images/give.svg" alt="marketing in color give back"></span>
						<h4>Give Back</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tortor erat, facilisis vitae maximus sed, facilisis a nibh.</p>
					</div>
					<div class="cell medium-6">
						<span class="icon left"><img src="<?php bloginfo('template_directory'); ?>/src/assets/images/cultivate.svg" alt="marketing in cultivate growth"></span>
						<h4>Cultivate Growth</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tortor erat, facilisis vitae maximus sed, facilisis a nibh.</p>
					</div>
					<div class="cell medium-6">
						<span class="icon left"><img src="<?php bloginfo('template_directory'); ?>/src/assets/images/prosper.svg" alt="marketing in color prosper"></span>
						<h4>Prosper</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tortor erat, facilisis vitae maximus sed, facilisis a nibh.</p>
					</div>
					<div class="cell medium-6">
						<span class="icon left"><img src="<?php bloginfo('template_directory'); ?>/src/assets/images/creative.svg" alt="marketing in color digital stay creative"></span>
						<h4>Stay Creative</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tortor erat, facilisis vitae maximus sed, facilisis a nibh.</p>
					</div>
					<div class="cell medium-6">

					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>