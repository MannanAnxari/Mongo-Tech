(function ($) {
  "use strict";
  $(".dropdown-menu a.dropdown-toggle").on("click", function (e) {
    if (!$(this).next().hasClass("show")) {
      $(this)
        .parents(".dropdown-menu")
        .first()
        .find(".show")
        .removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass("show");
    $(this)
      .parents("li.nav-item.dropdown.show")
      .on("hidden.bs.dropdown", function (e) {
        $(".dropdown-submenu .show").removeClass("show");
      });
    return false;
  });
  if ($(".search-box-outer").length) {
    $(".search-box-outer").on("click", function () {
      $("body").addClass("search-active");
    });
    $(".close-search").on("click", function () {
      $("body").removeClass("search-active");
    });
  }
  $(document).on("ready", function () {
    $("[data-background]").each(function () {
      $(this).css(
        "background-image",
        "url(" + $(this).attr("data-background") + ")"
      );
    });
  });
  new WOW().init();
  $(".hero-slider").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    margin: -1,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    items: 1,
    navText: [
      "<i class='far fa-long-arrow-left'></i>",
      "<i class='far fa-long-arrow-right'></i>",
    ],
  });
  $(".hero-slider").on("change.owl.carousel", function (event) {
    new WOW().init();
  });
  $(".hero-slider2").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    margin: -1,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    items: 1,
    navText: [
      "<i class='fal fa-long-arrow-left'></i>",
      "<i class='fal fa-long-arrow-right'></i>",
    ],
  });
  $(".hero-slider2").on("change.owl.carousel", function (event) {
    new WOW().init();
  });
  $(".partner-slider").owlCarousel({
    loop: true,
    margin: 40,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: { 0: { items: 2 }, 600: { items: 3 }, 1000: { items: 6 } },
  });
  $(".testimonial-slider").owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: true,
    autoplay: true,
    responsive: { 0: { items: 1 }, 600: { items: 2 }, 1000: { items: 3 } },
  });
  $(window).on("load", function () {
    $("#preloader").fadeOut("slow");
  });
  $(".counter").countTo();
  $(".counter-box").appear(
    function () {
      $(".counter").countTo();
    },
    { accY: -100 }
  );
  $(".popup-gallery").magnificPopup({
    delegate: ".popup-img",
    type: "image",
    gallery: { enabled: true },
  });
  $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
  });
  $(window).scroll(function () {
    if (
      document.body.scrollTop > 100 ||
      document.documentElement.scrollTop > 100
    ) {
      $("#scroll-top").fadeIn("slow");
    } else {
      $("#scroll-top").fadeOut("slow");
    }
  });
  $("#scroll-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500);
    return false;
  });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $(".navbar").addClass("fixed-top");
    } else {
      $(".navbar").removeClass("fixed-top");
    }
  });
  $(window).on("load", function () {
    if ($(".filter-box").children().length > 0) {
      $(".filter-box").isotope({
        itemSelector: ".filter-item",
        masonry: { columnWidth: 1 },
      });
      $(".filter-btns").on("click", "li", function () {
        var filterValue = $(this).attr("data-filter");
        $(".filter-box").isotope({ filter: filterValue });
      });
      $(".filter-btns li").each(function () {
        $(this).on("click", function () {
          $(this).siblings("li.active").removeClass("active");
          $(this).addClass("active");
        });
      });
    }
  });
  let date = new Date().getFullYear();
  $("#date").html(date);
  var mousecursor = document.querySelector(".mouse-cursor");
  var mousecursorinner = document.querySelector(".mouse-cursor-inner");
  var a = document.querySelectorAll("a");
  document.addEventListener("mousemove", function (e) {
    var x = e.clientX;
    var y = e.clientY;
    mousecursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`;
  });
  $("a").hover(
    function () {
      $(".mouse-cursor-inner").removeClass("mouse-inner-color");
      $(".mouse-cursor-inner").addClass("mouse-inner-transparent");
    },
    function () {
      $(".mouse-cursor-inner").removeClass("mouse-inner-transparent");
      $(".mouse-cursor-inner").addClass("mouse-inner-color");
    }
  );
  document.addEventListener("mousemove", function (e) {
    var x = e.clientX;
    var y = e.clientY;
    mousecursorinner.style.left = x + "px";
    mousecursorinner.style.top = y + "px";
  });
  document.addEventListener("mousedown", function () {
    mousecursor.classList.add("click");
    mousecursorinner.classList.add("mouse-inner-hover");
  });
  document.addEventListener("mouseup", function () {
    mousecursor.classList.remove("click");
    mousecursorinner.classList.remove("mouse-inner-hover");
  });
  a.forEach((i) => {
    i.addEventListener("mouseover", () => {
      mousecursor.classList.add("mouse-hover");
    });
    i.addEventListener("mouseleave", () => {
      mousecursor.classList.remove("mouse-hover");
    });
  });
})(jQuery);




"use strict";

$(document).ready(function () {
    "use strict";

    var progressPath = document.querySelector('.progress-wrap path');
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
    var updateProgress = function () {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLength - (scroll * pathLength / height);
        progressPath.style.strokeDashoffset = progress;
    }
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 50;
    var duration = 550;
    jQuery(window).on('scroll', function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.progress-wrap').addClass('active-progress');
        } else {
            jQuery('.progress-wrap').removeClass('active-progress');
        }
    });
    jQuery('.progress-wrap').on('click', function (event) {
        event.preventDefault();
        jQuery('html, body').animate({ scrollTop: 0 }, duration);
        return false;
    })


});
