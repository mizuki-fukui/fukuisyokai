$(function () {

  //kv slick
  $('.slick').slick({
    arrows: false,
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    autoplay: true,
    cssEase: 'linear',
    autoplaySpeed: 4000,
  });

    //works slick
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