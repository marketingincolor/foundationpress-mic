import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();

$(document).ready(function(){
  toolsCarousel();
  teamCarousel();
  leftMenu();
  openMobileMenu();
  mobileMenuSlideDown();
  validateForm();
  scrollToForm();
  hideInterested();
});

$(window).scroll(function(){
  mobileMenuSlideDown();
  hideInterested();
});

// Landing Page Template Scripts
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
// End Landing Page Scripts

function openMobileMenu(menuState){
  $('#top-hamburger,#top-hamburger-slide-down').click(function(){
    console.log('clicked hamburger');
    const $menu = $('#hamburger');

    if (menuState == undefined) {
      menuState = false;
    }

    if (menuState == false) {
      menuState = true;
      $menu.addClass('is-active');
      $('.left-menu').addClass('slide-in');
      closeMenu($menu,true);
    }else{
      menuState = false;
      $menu.removeClass('is-active');
      $('.left-menu').removeClass('slide-in');
      closeMenu($menu,false);
    }
  });
}

function mobileMenuSlideDown(){
  const $mobileMenu = $('.mobile-menu');
  const $window     = $(window);

  if ($window.width() <= 640) {
    console.log('width is less than 641');

    if ($window.scrollTop() > 60) {
      console.log('scrollTop greater than 60');
      $mobileMenu.addClass('slide-down');
    }else{
      $mobileMenu.removeClass('slide-down');
    }

  }
}

function toolsCarousel(){
  $(".tools-carousel").owlCarousel({
    nav   : true,
    loop  : true,
    items : 5,
    margin: 20,
    autoplay:true,
    autoplayTimeout:1500,
    autoplayHoverPause:true,
    navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
    responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:5
      }
    }
  });
}

function teamCarousel(){
  $(".team-carousel").owlCarousel({
    nav   : true,
    loop  : true,
    items : 5,
    margin: 20,
    autoplay:true,
    autoplayTimeout:2500,
    autoplayHoverPause:true,
    navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
    responsive:{
      0:{
          items:1
      },
      768:{
          items:3
      },
      1024:{
          items:5
      }
    }
  });
}

function leftMenu(open){
  const $menu = $('#hamburger');
  if (open == undefined){
    open = false;
  }

  $menu.click(function(){
    if (open == false) {
      open = true;
      $(this).addClass('is-active');
      $(this).parent().addClass('slide-in');
      closeMenu($menu,true);
    }else{
      open = false;
      $(this).removeClass('is-active');
      $(this).parent().removeClass('slide-in');
      closeMenu($menu,false);
    }
  });
}

function closeMenu(menu,open){
  if (open == true) {
    
    $('section').click(function(){
      $(menu).removeClass('is-active');
      $(menu).parent().removeClass('slide-in');
      leftMenu(false);
      openMobileMenu(false);
    });
  }
}
