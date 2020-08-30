layui.use(['jquery', 'util'], function () {
  var $    = layui.jquery;
  var util = layui.util;

  $(window).load(function () {
    new WOW().init();
  })

  // 一键至顶
  util.fixbar();

  $('.next').click(function () {
    $('html,body').animate({
      scrollTop: $('#section1').outerHeight() - 40
    }, 600);
  });

  $('#menu').on('click', function () {
    var mark = $(this).attr('data-mark');
    if (mark === 'false') {
      $(this).removeClass('menu_open').addClass('menu_close');
      //open
      $('#navgation').removeClass('navgation_close').addClass('navgation_open');
      $(this).attr({ 'data-mark': "true" });
    } else {
      $(this).removeClass('menu_close').addClass('menu_open');
      //close
      $('#navgation').removeClass('navgation_open').addClass('navgation_close');
      $(this).attr({ 'data-mark': "false" });
    }
  });
  $('#navgation').on('click', function () {
    var mark = $('#menu').attr('data-mark');
    if (mark === 'true') {
      $('#menu').removeClass('menu_close').addClass('menu_open');
      $('#navgation').removeClass('navgation_open').addClass('navgation_close');
      $('#menu').attr({ 'data-mark': "false" });
    }
  });
});
