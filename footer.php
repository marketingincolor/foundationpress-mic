<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


  $pages = get_pages(); 
  foreach ($pages as $page) {
    if ($page->post_title == 'Footer Information') {
      $footer_id = $page->ID;
    }
  }

?>

<section class="footer <?php if (!is_page_template('front-page.php')) { echo 'about-services'; } ?>">

  <?php if (!is_page_template('page-contact.php')) { ?>
    
  <div class="top-footer">
  	<div class="grid-container fluid">
  	  <div class="grid-x relative">
  	    <div class="medium-8 cell">
  	    	<img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/bricks.jpg" alt="Lets' Work Together" class="relative bricks">
  	    </div>
  	    <div class="work-together absolute">
  	    	<div class="grid-x">
            <div class="medium-10 small-offset-1 small-10 cell">
              <h2><?php the_field('footer_title',$footer_id); ?></h2>
            </div>
  	    		<div class="large-6 medium-9 small-offset-1 small-10 cell">
  	    			<blockquote><p><?php the_field('footer_body',$footer_id); ?></p></blockquote>
  	    		</div>
  	    		<div class="medium-12 cell">
  	    			<a href="<?php the_field('footer_cta_link',$footer_id); ?>" class="contact-us btn-arrow white"><?php the_field('footer_cta_text',$footer_id); ?> <i class="fas fa-arrow-right"></i></a>
  	    		</div>
  	    	</div>
  	    </div>
  	  </div>
  	</div>
  </div>

  <?php } ?>
  
  <div class="bottom-footer">
  	<div class="grid-container">
  		<div class="grid-x">
  			<div class="medium-5 medium-offset-0 small-10 small-offset-1 cell">
  				<ul class="address">
  					<li><img src="<?php the_field('footer_mic_logo',$footer_id); ?>" alt="Marketing in Color"></li>
						<li>
							<span><?php the_field('footer_address',$footer_id); ?></span><br>
							<span><?php the_field('footer_phone_number',$footer_id); ?></span><br>
							<span>
								<ul class="social-icons">
									<li><a href="<?php the_field('footer_facebook_link',$footer_id); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
									<li><a href="<?php the_field('footer_twitter_link',$footer_id); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
									<li><a href="<?php the_field('footer_linkedin_link',$footer_id); ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="<?php the_field('footer_instagram_link',$footer_id); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
								</ul>
						  </span>
						</li>
  				</ul>
  			</div>
  			<div class="medium-7 cell text-right bbb-copy relative">
  				<p><a href="https://www.bbb.org/us/fl/tampa/profile/marketing-consultant/marketing-in-color-inc-0653-90330219" target="_blank"><img src="<?php the_field('footer_bbb_logo',$footer_id); ?>" alt="Better Business Bureau"></a></p>
					<ul class="copyright">
						<li>&copy; <?php echo date('Y'); ?> <?php the_field('footer_copyright',$footer_id); ?></li> <span class="hide800">&nbsp;|&nbsp;</span>
						<li><a href="<?php the_field('footer_privacy_link',$footer_id); ?>"><?php the_field('footer_privacy_text',$footer_id); ?></a></li> <span class="hide800">&nbsp;|&nbsp;</span>
						<li><a href="<?php the_field('footer_sharpspring_link',$footer_id); ?>"><?php the_field('footer_sharpspring_text',$footer_id); ?></a></li>
					</ul>
  			</div>
  		</div>
  	</div>
  </div>
</section>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
  </div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/dist/assets/js/owl.carousel.min.js" defer></script>
</body>
</html>