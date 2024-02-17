/* global scripts */

// VARIABLES
var mobileMenuIcon = $("#hamburgerButton");
var mobileMenu = $(".main-nav__drawer");
var menuOverlay = $(".main-nav__overlay");
var body = $("body");
var win = $(window);

var stickyWrap = $(".sticky-wrapper");
var mainNav = $("#mainNav");
var stickyNavTop = mainNav.offset().top;

var blogTile = $(".section--blog-tiles");
var mobileSlider = $(".mobile-slider");
var scrollToSlideTwo = $("#slide2");

var slide1 = $("#slide1");
var slide2 = $("#slide2");
var slide3 = $("#slide3");
var nav1 = $("#nav1");
var nav2 = $("#nav2");
var nav3 = $("#nav3");

$(function () {
  mobileSlider.on("scroll", function () {
    var first = $(this).scrollLeft();
    var last = $(this)[0].scrollWidth - $(this).parent().width();
    if (first == 0) {
      slide1.addClass("active");
      slide1.siblings().removeClass("active");
      nav1.addClass("active");
      nav1.siblings().removeClass("active");
    } else if (first == last) {
      slide3.addClass("active");
      slide3.siblings().removeClass("active");
      nav3.addClass("active");
      nav3.siblings().removeClass("active");
    } else {
      slide2.addClass("active");
      slide2.siblings().removeClass("active");
      nav2.addClass("active");
      nav2.siblings().removeClass("active");
    }
  });
  mobileSlider.trigger("scroll");

  showMiddleBlog();

  mobileMenuIcon.click(function () {
    mobileMenuToggle();
  });

  $(window).scroll(function () {
    stickyNav();
  });

  $(window).on("resize", function () {
    if (win.width() >= 768) {
      mobileMenuReset();
    }
    showMiddleBlog();
  });

  if (win.width() >= 768) {

    $(".founder").find(".bio").appendTo(".bios");
    
    $(".bio1").removeClass("hide");
    $(".bio1").addClass("show");

    $(".founder").click(function () {
        var currentClass = $(this).data("class");
        $(".bio").removeClass("show");
        $(".bio").addClass("hide");
        $("div." + currentClass).removeClass("hide");
        $("div." + currentClass).addClass("show");

    });
  }

  $(".icon-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    mobileFirst: true,
    prevArrow:
      "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:
      "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });

  //setTimeout(function(){   appendSelect(); }, 3000);

});

function appendSelect() {
  var sel = $('<select class="mapsvg-controller-view-content"/>');

  $('.mapsvg-controller-view-content div').each(function(){
    console.log("i hit");
    sel.append('<option value='+this.id+'>'+this.innerHTML+'</option>')
  })
  
  $('.mapsvg-controller-view-content > div').replaceWith(sel) 
}

function mobileMenuToggle() {
  mobileMenuIcon.toggleClass("is-open");
  mobileMenu.toggleClass("is-open");
  menuOverlay.toggleClass("active");
  body.toggleClass("disable-scroll");
}

function stickyNav() {
  var scrollTop = $(window).scrollTop();

  if (scrollTop > stickyNavTop) {
    stickyWrap.addClass("sticky");
    mainNav.addClass("sticky-margin");
  } else {
    stickyWrap.removeClass("sticky");
    mainNav.removeClass("sticky-margin");
  }
}

function mobileMenuReset() {
  mobileMenuIcon.removeClass("is-open");
  mobileMenu.removeClass("is-open");
  menuOverlay.removeClass("active");
  body.removeClass("disable-scroll");
}

function showMiddleBlog() {
  if ($(window).width() < 768) {
    if (blogTile.length) {
      //you can now reuse  $myDiv here, without having to select it again.
      mobileSlider.animate(
        {
          scrollLeft: scrollToSlideTwo.offset().left - 40,
        },
        250
      );
    }
  } else {
    //do nothing
  }
}
