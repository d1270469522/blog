layui.use(['jquery', 'layer', 'util'], function () {
  var $     = layui.jquery;
  var layer = layui.layer;
  var util  = layui.util;

  // 一键置顶
  util.fixbar();

  // 导航控制
  master.start($);
});

var slider = 0;
var master = {};

master.start = function ($) {

  // 鼠标滑过每个菜单 样式改变
  $('#nav li').hover(function () {
    $(this).addClass('current');
    $(this).siblings().removeClass('current');
  }, function () {
    $(this).removeClass('current');
  });

  // 手机模式：右侧的展开菜单
  $('#header-menu').on('click', function () {
    $('#nav').toggle(500);
  });
};
