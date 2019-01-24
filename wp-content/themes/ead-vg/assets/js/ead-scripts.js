jQuery(window).scroll(function() {    
  var scroll = jQuery(window).scrollTop();

  if (scroll >= 1) {
    jQuery(".idHeader").addClass("black-header");
  } else {
    jQuery(".idHeader").removeClass("black-header");
  }
});
    
jQuery('#leiaMais').on('click', function(e) {
  jQuery('.text-hide').toggleClass("show-hide-text");
  e.preventDefault();
});

jQuery('.banner-home').slick({
    dots: true,
  	infinite: true,
  	autoplay: true,
});
