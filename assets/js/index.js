$(function () {

  //spmenu
  var spIcon = $('.js-spicon');
  var spMenu = $('.js-spmenu');
  var spbar = $('.js-spbar');

  spIcon.on('click', function () {
    spMenu.toggleClass('active');
    spbar.toggleClass('active');
  })


  //scroll Func
  var scrollBtn = $('.js-scroll');
  var body = $('html, body');

  scrollBtn.click(function () {
    body.animate({
        scrollTop: 0
    }, 500);
    return false;
  });

  //fadein up
  const fadeFunc = $('.js-fade');
  
  $(window).scroll(function() {
    fadeFunc.each(function(i, e){
      var targetElement = $(e).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if(scroll > targetElement - windowHeight + 100 && scroll < targetElement + $(e).height() - 100) {
        $(e).addClass('active');
      } else {
        // $(e).removeClass('active');
      }
    });
  });

});