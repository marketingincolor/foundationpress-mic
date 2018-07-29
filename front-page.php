<?php 
	/* Template Name: Home */
	get_header();
?>

<section class="video-hero relative">
	<video src="<?php bloginfo('template_directory'); ?>/dist/assets/videos/mic-header-video.mp4" autoplay="" loop="" muted="" preload="auto"></video>
	<a href="<?php echo site_url(); ?>" class="logo absolute show-for-medium"><img src="<?php bloginfo('template_directory'); ?>/src/assets/images/white-logo.png" alt="<?php bloginfo('title'); ?>"></a>
	
	<aside class="meta absolute">
		<h1>Plan. Execute. Analyze. Repeat.</h1>
		<blockquote>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium libero soluta eius nulla veniam sint sunt. Cupiditate, in, reprehenderit. Numquam temporibus adipisci amet minima natus, hic laboriosam sapiente veniam totam.</p>
		  <a href="#" class="btn-arrow white">Let's work together <i class="fas fa-arrow-right"></i></a>
		</blockquote>
	</aside>
</section>

<section class="who">
	<div class="orange-bg show800">
		<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/tampa-skyline.png" alt="Marketing in Color Tampa,FL">
	</div>
	<div class="grid-container">
		<div class="grid-x relative">
			<div class="cell medium-8 medium-offset-0 gray-box small-10 small-offset-1">
				<div class="grid-x">
					<div class="cell medium-8">
						<h3>Who We Are</h3>
						<p>We are a “Type A” company with a “No BS” approach. Since 1996, we’ve built a rock-solid reputation for delivering results, whether that’s helping our client partners win new business, influence a tough crowd, or be on the cutting edge. At MIC, we want to positively impact every client we engage with. We strive to inspire, challenge, and show our true colors in everything we say and do. And that, ladies and gentlemen, is what it means to Think In Color.</p>
						<a href="#" class="btn-arrow orange">More About Us <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<img src="<?php bloginfo('template_directory'); ?>/src/assets/images/who-we-are3.png" class="absolute hide800" alt="marketing in color who we are">
		</div>
	</div>
</section>

<section class="what">
	<div class="grid-container">
		<div class="grid-x grid-margin-x relative">
			<div class="absolute purple-box show-for-medium"></div>
			<div class="medium-7 cell orbit-bg">
				<div class="orbit" role="region" aria-label="What we do" data-orbit>
				  <div class="orbit-wrapper">
				    <ul class="orbit-container">
				      <li class="is-active orbit-slide">
				        <figure class="orbit-figure">
				          <img class="orbit-image" src="<?php bloginfo('template_directory'); ?>/src/assets/images/what-we-do.png" alt="Space">
				        </figure>
				      </li>
				      <li class="orbit-slide">
				        <figure class="orbit-figure">
				          <img class="orbit-image" src="<?php bloginfo('template_directory'); ?>/src/assets/images/what-we-do.png" alt="Space">
				        </figure>
				      </li>
				      <li class="orbit-slide">
				        <figure class="orbit-figure">
				          <img class="orbit-image" src="<?php bloginfo('template_directory'); ?>/src/assets/images/what-we-do.png" alt="Space">
				        </figure>
				      </li>
				    </ul>
				  </div>
				  <nav class="orbit-bullets">
				    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
				    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
				    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
				  </nav>
				</div>
			</div>
			<div class="medium-5 medium-offset-0 small-10 small-offset-1 cell">
				<h3>What We Do</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus minima at inventore sed corporis modi nisi reiciendis veritatis incidunt provident excepturi ullam illum molestias, consequatur eveniet rerum saepe, omnis quisquam.</p>
				<a href="#" class="btn-arrow orange">Explore Our Services <i class="fas fa-arrow-right"></i></a>
			</div>
		</div>
	</div>
</section>

<section class="why" style="background-image:url(<?php bloginfo('template_directory'); ?>/src/assets/images/why-were-different.png);">
	<div class="grid-container relative">
		<div class="grid-x">
			<div class="medium-6 medium-offset-0 small-10 small-offset-1 cell">
				<aside class="meta">
					<h3>Why We're Different</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quas necessitatibus commodi provident sed tempore ullam eveniet, tempora, excepturi officiis amet corrupti, error! Nostrum quasi, dolores dignissimos quam beatae ab?</p>
					<a href="#" class="btn-arrow orange">Let's Talk <i class="fas fa-arrow-right"></i></a>
				</aside>
			</div>
		</div>
	</div>
</section>

<section class="tools">
	<div class="grid-container">
		<div class="grid-x">
			<div class="medium-6 medium-offset-3 small-10 small-offset-1 cell">
				<h3 class="text-center">Tools of the Trade</h3>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt eligendi consequuntur suscipit reprehenderit, inventore corrupti fugit praesentium nam, nemo</p>
			</div>
			<div class="small-10 small-offset-1 cell">
				<div class="tools-carousel owl-carousel hide-for-small-only">
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/wordpress.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/shopify.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/sharpspring.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/invision.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/adroll.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/salesforce.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/adwords.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/axel.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/crazyegg.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/creativecloud.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/datastudio.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/facebook.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/googleanalytics.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/hotjar.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/infusionsoft.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/intercom.png" alt="">
				  </div>
					<div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/mailchimp.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/magento.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/sproutsocial.png" alt="">
				  </div>
				  <div>
				  	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/zapier.png" alt="">
				  </div>
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
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/wordpress.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/shopify.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/sharpspring.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/salesforce.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/adroll.png" alt=""></li>
				        </ul>
				      </li>
				      <li class="orbit-slide">
				        <ul>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/invision.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/adwords.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/axel.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/crazyegg.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/creativecloud.png" alt=""></li>
				        </ul>
				      </li>
				      <li class="orbit-slide">
				        <ul>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/datastudio.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/facebook.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/googleanalytics.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/hotjar.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/infusionsoft.png" alt=""></li>
				        </ul>
				      </li>
				      <li class="orbit-slide">
				        <ul>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/intercom.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/mailchimp.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/magento.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/sproutsocial.png" alt=""></li>
				        	<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/zapier.png" alt=""></li>
				        </ul>
				      </li>
				    </ul>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>