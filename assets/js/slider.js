$(function () {
    //slick
    $('.slider').slick({
      infinite: true,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow:'<div class="prev"></div>',
      nextArrow:'<div class="next"></div>',
      autoplay: true,
      autoplaySpeed: 3000,
    });
})