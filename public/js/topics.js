layui.use(['jquery'], function () {

  var $ = layui.jquery;

  // 初始化共用js
  article.Init($);

});

var article = {};

article.Init = function ($) {

  var slider = 0;
  blogtype();

  // 手机：分类导航开
  $('.category-toggle').click(function (e) {
    e.stopPropagation();    //阻止事件冒泡
    categroyIn();
  });
  // 手机：分类导航关
  $('.article-category').click(function () {
    categoryOut();
  });
  // 手机：分类导航关  遮罩层
  $('.blog-mask').click(function () {
    categoryOut();
  });

  // 显示类别导航
  function categroyIn() {
    $('.category-toggle').addClass('layui-hide');
    $('.article-category').unbind('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend');
    $('.blog-mask').unbind('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend');
    $('.blog-mask').removeClass('maskOut').addClass('maskIn');
    $('.blog-mask').removeClass('layui-hide').addClass('layui-show');
    $('.article-category').removeClass('categoryOut').addClass('categoryIn');
    $('.article-category').addClass('layui-show');
  }
  // 隐藏类别导航
  function categoryOut() {
    $('.blog-mask').on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
      $('.blog-mask').addClass('layui-hide');
    });
    $('.article-category').on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
      $('.article-category').removeClass('layui-show');
      $('.category-toggle').removeClass('layui-hide');
    });
    $('.blog-mask').removeClass('maskIn').addClass('maskOut').removeClass('layui-show');
    $('.article-category').removeClass('categoryIn').addClass('categoryOut');
  }
  // 下拉以后，显示分类搜索
  function blogtype() {
    $(window).scroll(function (event) {
      var winPos = $(window).scrollTop();
      var height = parseInt($('div[class=other-item]:last').get(0).offsetHeight + $("div[class=other-item]:last").get(0).offsetTop + 1);
      if (winPos > height){
        $('#categoryandsearch').addClass('fixed');
      } else {
        $('#categoryandsearch').removeClass('fixed');
      }
    });
  };
};

