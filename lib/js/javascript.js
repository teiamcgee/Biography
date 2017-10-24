$(".contents-nav").hide();
$(".bannerToggleContainer").click(function(){
  $(".contents-nav").toggle();
});

$("#form").validate;
$(document).ready(function(){
  $('.gallery-pics').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
});

// $('.gallery-nav').slick({
//  slidesToShow: 1,
//  slidesToScroll: 1,
//  arrows: false,
//  fade: true,
//  asNavFor: '.gallery-nav'
// });
// $('.gallery-pics').slick({
//  slidesToShow: 3,
//  slidesToScroll: 1,
//  asNavFor: '.gallery-pics',
//  dots: true,
//  centerMode: true,
//  focusOnSelect: true
// });
