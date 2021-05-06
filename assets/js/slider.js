$(function () {

  //kv slick
  $('.slick').slick({
    arrows: false,
    dots: false,
    infinite: true,
    speed: 500,
    fade: true,
    autoplay: true,
    cssEase: 'linear',
    autoplaySpeed: 4000,
  });

    //works slick
    $('.slider').slick({
      arrows: true,
      dots: false,
      infinite: true,
      speed: 500,
      slidesToShow: 3,
      slidesToScroll: 3,
      prevArrow:'<div class="prev-slider">PREV</div>',
      nextArrow:'<div class="next-slider">NEXT</div>',
    });

    
})