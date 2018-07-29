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
});

$(window).scroll(function(){
  mobileMenuSlideDown();
});

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
    autoplay:false,
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
    autoplay:false,
    autoplayTimeout:3000,
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
