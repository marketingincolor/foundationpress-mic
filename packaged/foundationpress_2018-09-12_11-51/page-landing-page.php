<?php 
	/* Template Name: Landing Page */
	get_header('landing-page');
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

<section class="hero" style="background: url(<?php echo esc_url($featured_img_url); ?>) center center no-repeat;background-size:cover">
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell medium-7">
				<h1><?php the_field('landing_page_hero_title'); ?></h1>
				<p><?php the_field('landing_page_hero_subhead'); ?></p>
			</div>
		</div>
	</div>
</section>

<main class="main-content grid-container">
	<div class="grid-x grid-margin-x">
		<article id="body" class="body cell medium-7">
			
			<section class="questions">

				<?php the_field('questions_content'); ?>

			</section>

			<section class="intro">
				
				<?php the_field('who_we_are_content'); ?>

			</section>

			<section class="work">
				<h2><?php the_field('types_of_work_title'); ?></h2>
				<div class="grid-x grid-margin-x grid-margin-y">

				<?php if( have_rows('types_of_work') ): ?>
					<?php while( have_rows('types_of_work') ): the_row(); 

						$image = get_sub_field('work_type_icon');
						$title = get_sub_field('work_type_text');

						?>

						<div class="cell medium-5 icon">
							<img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" />
						  <p><?php echo $title; ?></p>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>

				</div>
			</section>

		</article>
		<aside id="sidebar" class="sidebar cell medium-5 large-4 large-offset-1">
			<div class="form-sticky">
			  <h2 class="text-center"><?php the_field('form_title'); ?></h2>
				<form action="" id="contact-form">
					<div class="form-inputs">
						<input type="text" name="first_name" placeholder="First Name" id="fname" required>
						<input type="text" name="last_name" placeholder="Last Name" id="lname" required>
						<input type="text" name="company_name" placeholder="Company Name" id="cname" required>
						<input type="number" name="phone_num" placeholder="Phone Number" id="phone" required>
						<input type="email" name="email" placeholder="Email" id="email" required>
						<textarea name="message" rows="3" placeholder="<?php the_field('textarea_placeholder'); ?>" id="message"></textarea>
					</div>
					<div id="error"></div>
					<button id="submit" type="submit" form="contact-form" value="Submit"><?php the_field('form_button_text'); ?>&nbsp; <i class="fas fa-arrow-right"></i></button>
				</form>
			</div>
		</aside>
		<aside id="interested">
			<h2>Interested?&nbsp; <i class="fas fa-chevron-down"></i></h2>
		</aside>
	</div>
</main>

<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<script>
	function scrollToForm(){
	  $("#interested").click(function() {
	      $('html, body').animate({
	          scrollTop: $("#sidebar").offset().top
	      }, 1000);
	  });
	}

	function hideInterested(){
	  var totalHeight = $('.hero').outerHeight() + $('#body').outerHeight();
	  if ($(window).scrollTop() >= totalHeight - $(window).height()) {
	    $('#interested').addClass('invisible');
	  }else{
	    $('#interested').removeClass('invisible');
	  }
	}

	function showError(message){
	  $('#error').css('display','block');
	  $('#error').html(message);
	}

	// Validate form before sending
	function validateForm(){
	  $('#contact-form').find('#submit').click(function(event){
	    event.preventDefault();

	    var emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	    var email       = $('#email').val();
	    var fName       = $('#fname').val();
	    var lName       = $('#lname').val();
	    var cName       = $('#cname').val();
	    var phone       = $('#phone').val();
	    var message     = $('#message').val();

	    $('#contact-form input, #contact-form textarea').removeClass('invalid');

	    if(fName === ''){
	      showError('Please enter a first name');
	      $('#fname').addClass('invalid');
	      return false;
	    }else if(lName === ''){
	      showError('Please enter a last name');
	      $('#lname').addClass('invalid');
	      return false;
	    }else if(cName === ''){
	      showError('Please enter a company name');
	      $('#cname').addClass('invalid');
	      return false;
	    }else if(phone === ''){
	      showError('Please enter a phone number');
	      $('#phone').addClass('invalid');
	      return false;
	    }else if (!emailFormat.test(email)) {
	      showError('Please enter a valid email');
	      $('#email').addClass('invalid');
	      return false;
	    }else if (message === '') {
	      showError('Please enter a message');
	      $('#message').addClass('invalid');
	      return false;
	    }else{
	      sendFormData();
	    }
	  });
	}

	// Send form data, hide form, and display success message
	function sendFormData(){
	  $.ajax({
	    type: 'POST',
	    success: function(data){
	      __ss_noform.push(['submit', null, ss_form_id]);

	      location.href = location.origin + '/success';
	    }

	  });
	}
</script>

<?php get_footer('landing-page');