$(function () {
    $(".hovereffect").on("mouseenter mouseleave touchstart touchend", function(e){
        if(e.type == 'touchstart') {
          $(this).off('mouseenter mouseleave');
        }
      
        $(this).toggleClass("hover");
      });
});