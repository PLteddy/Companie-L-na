jQuery(document).ready(function ($) {
    $(".menu a").click(function () {
      $(".trigger").toggle();
      $(".menu").toggleClass("round");
      $(".close").toggle();
      $(".drop-down").toggleClass("down");
    });
  });
  

  