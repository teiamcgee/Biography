// Slick slideshow
$(document).ready(function(){
  $("#form").validate();
  $('.gallery-pics').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
});
