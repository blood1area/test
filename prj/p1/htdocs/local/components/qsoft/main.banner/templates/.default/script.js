$(document).ready(function() {
  if ($(".bxslider li").length > 1) {
    var element = $('.bxslider');
      element.bxSlider({
          auto: true,
          pager: true,
          onSlideAfter: function() {
              element.startAuto()
          }
      });
  }
})