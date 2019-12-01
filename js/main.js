$(function() {
  $(document).scroll(function() {
    var $nav = $(".nav-wrapper");
    $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());

    var $side = $(".top");
    $side.toggleClass("scrolled", $(this).scrollTop() > $side.height());
  });
});
