$(function () {
  var accBtn = $('.js-accBtn');
  var contents = $('.js-contents');

  // accBtn.on('click', function () {
  //   $(this).toggleClass('open');
  //   $(this).children().toggleClass('active');
  // });


  accBtn.on('click', function () {
    $(this).toggleClass('open');
    $(this).next().toggleClass('active');
  });





})