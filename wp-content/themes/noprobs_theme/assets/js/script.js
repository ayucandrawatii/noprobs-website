(function($) {

  var timer;
  $(window).bind('resize', function() {
    clearTimeout(timer);
    timer = setTimeout(function() {
      $(window).resize();
    }, 250);
  });

  /* Superfish Menu */
  jQuery(document).ready(function() {
    jQuery('ul.sf-menu').superfish();
    $('.menu-item a').click(function() {
      var parent = $(this).parent().parent().parent().parent();
      parent.toggleClass('show');

    });
  });

  /* Superfish Mobile Menu */
  $('.top-menu .menu .menu-item-has-children').append('<div class="mobnav-subarrow d-inline-flex justify-content-center align-items-center d-lg-none"><span class="fa fa-caret-down"></span></div>').find('ul').addClass('collapse');
  $('.mobnav-subarrow').click(function() {
    $('.fa', this).toggleClass("fa-caret-down").toggleClass("fa-caret-up");
    $(this).siblings('ul').collapse('toggle');
  });

  /* Add class */
  $(".wpcf7-select").addClass("form-control");
  $(".wcu .col-12.col-md-6.col-lg-3:nth-child(2) h5").addClass("star");


})(jQuery)

//Animation library
AOS.init();

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
