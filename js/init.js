$(function() {
  //刷新Copyright的年份
  var date = new Date();
  var year = $("#year");
  year.text(date.getFullYear());



  //监听导航栏菜单按钮
  $(".is-off").on("click", function() {
    $(this).toggleClass("is-on");
  });
  
  
  
  //返回顶部悬浮按钮
  var backToTopFloatBtn = $(".back-to-top-btn");
  
  backToTopFloatBtn.on("click", function () {
    $("html, body").animate({scrollTop: 0}, 500); //500毫秒
  });
  
  //当滚动条的垂直位置大于浏览器所能看到的页面的那部分的高度时，回到顶部按钮就显示
  $(window).on("scroll", function () {
    if ($(window).scrollTop() >= $(window).height()) {
      backToTopFloatBtn.fadeIn();
    } else {
      backToTopFloatBtn.fadeOut();
    }
  });
  
  $(window).trigger("scroll"); //触发滚动事件，避免刷新的时候显示回到顶部按钮

});
