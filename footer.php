<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<section class="footer">
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
              <h2>Let's Work Together</h2>
            </div>
  	    		<div class="large-6 medium-9 small-offset-1 small-10 cell">
  	    			<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum ad, facere dicta expedita beatae et atque nemo.</p></blockquote>
  	    		</div>
  	    		<div class="medium-12 cell">
  	    			<a href="#" class="contact-us btn-arrow white">Contact Us <i class="fas fa-arrow-right"></i></a>
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
  			<div class="medium-5 small-10 small-offset-1 cell">
  				<ul class="address">
  					<li><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/mic-bug.png" alt="Marketing in Color"></li>
						<li>
							<span>1515 N. Marion St, Suite #2 <br class="show800">Tampa, FL 33602</span><br>
							<span>(813)258-3771</span><br>
							<span>
								<ul class="social-icons">
									<li><a href="https://www.facebook.com/MarketingInColor/"><i class="fab fa-facebook-square"></i></a></li>
									<li><a href="https://twitter.com/mktgincolor"><i class="fab fa-twitter"></i></a></li>
									<li><a href="https://www.linkedin.com/company/marketing-in-color"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="https://www.instagram.com/mktgincolor/"><i class="fab fa-instagram"></i></a></li>
								</ul>
						  </span>
						</li>
  				</ul>
  			</div>
  			<div class="medium-7 cell text-right bbb-copy relative">
  				<p><img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/bbb.png" alt="Better Business Bureau"></p>
					<ul class="copyright">
						<li>&copy; <?php echo date('Y'); ?> Marketing In Color</li> <span class="hide800">&nbsp;|&nbsp;</span>
						<li><a href="#">Privacy Policy</a></li> <span class="hide800">&nbsp;|&nbsp;</span>
						<li><a href="#">SharpSpring Login</a></li>
					</ul>
  			</div>
  		</div>
  	</div>
  </div>
</section>

<script src="<?php bloginfo('template_directory'); ?>/dist/assets/js/owl.carousel.min.js"></script>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>