$(function () {
  var accBtn = $('.js-accBtn');
  var contents = $('.js-contents');
  var acBox = $('.js-acBox');
  var box = $('.js-box');
  var acc = $('.js-accordion');

  // accBtn.on('click', function () {
  //   $(this).toggleClass('open');
  //   $(this).children().toggleClass('active');
  // });


  // accBtn.on('click', function () {
  //   $(this).toggleClass('open');
  //   $(this).next().toggleClass('active');
  // });


  accBtn.on('click', function () {
    $(this).toggleClass('open');
    $(this).parent(box).find(acc).toggleClass('active');
  });



})