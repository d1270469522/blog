layui.use(['jquery', 'util'], function () {
  var $    = layui.jquery;
  var util = layui.util;

  // 初始化 wow.js
  $(window).load(function () {
    new WOW().init();
  })

  // 一键置顶
  util.fixbar();

  // 首页：第一模块 点击向下箭头跳转第二模块
  $('#next').click(function () {
    $('html,body').animate({
      scrollTop: $('#section1').outerHeight() - 40
    }, 600);
  });

  // 右上角菜单按钮 开关
  $('#menu').on('click', function () {
    var mark = $(this).attr('data-mark');
    if (mark === 'false') {
      $(this).removeClass('menu_open').addClass('menu_close');
      $('#navgation').removeClass('navgation_close').addClass('navgation_open');
      $(this).attr({ 'data-mark': "true" });
    } else {
      $(this).removeClass('menu_close').addClass('menu_open');
      $('#navgation').removeClass('navgation_open').addClass('navgation_close');
      $(this).attr({ 'data-mark': "false" });
    }
  });

  // 右上角菜单按钮开了以后，点击页面遮罩层都可以关闭
  $('#navgation').on('click', function () {
    var mark = $('#menu').attr('data-mark');
    if (mark === 'true') {
      $('#menu').removeClass('menu_close').addClass('menu_open');
      $('#navgation').removeClass('navgation_open').addClass('navgation_close');
      $('#menu').attr({ 'data-mark': "false" });
    }
  });
});
