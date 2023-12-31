
// $(window).load(function () {
//           $("#preloaders").fadeOut(2000);
// });
(function ($) {
          "use strict";

          if ($(".countdown-one__list").length) {
                    let deadLine = new Date(
                              Date.parse(new Date()) + 12 * 24 * 60 * 60 * 1000
                    );
                    $(".countdown-one__list").countdown({
                              date: deadLine,
                              render: function (date) {
                                        this.el.innerHTML =
                                                  "<li> <div class='days'> <i>" +
                                                  date.days +
                                                  "</i> <span>Days</span> </div> </li>" +
                                                  "<li> <div class='hours'> <i>" +
                                                  date.hours +
                                                  "</i> <span>Hours</span> </div> </li>" +
                                                  "<li> <div class='minutes'> <i>" +
                                                  date.min +
                                                  "</i> <span>Minutes</span> </div> </li>" +
                                                  "<li> <div class='seconds'> <i>" +
                                                  date.sec +
                                                  "</i> <span>Seconds</span> </div> </li>";
                              },
                    });
          }

          if ($(".scroll-to-target").length) {
                    $(".scroll-to-target").on("click", function () {
                              var target = $(this).attr("data-target");
                              // animate
                              $("html, body").animate(
                                        {
                                                  scrollTop: $(target).offset()
                                                            .top,
                                        },
                                        1000
                              );

                              return false;
                    });
          }

          if ($(".video-popup").length) {
                    $(".video-popup").magnificPopup({
                              type: "iframe",
                              mainClass: "mfp-fade",
                              removalDelay: 160,
                              preloader: true,

                              fixedContentPos: false,
                    });
          }

          if ($(".img-popup").length) {
                    var groups = {};
                    $(".img-popup").each(function () {
                              var id = parseInt($(this).attr("data-group"), 10);

                              if (!groups[id]) {
                                        groups[id] = [];
                              }

                              groups[id].push(this);
                    });

                    $.each(groups, function () {
                              $(this).magnificPopup({
                                        type: "image",
                                        closeOnContentClick: true,
                                        closeBtnInside: false,
                                        gallery: {
                                                  enabled: true,
                                        },
                              });
                    });
          }

          function dynamicCurrentMenuClass(selector) {
                    let FileName = window.location.href.split("/").reverse()[0];

                    selector.find("li").each(function () {
                              let anchor = $(this).find("a");
                              if ($(anchor).attr("href") == FileName) {
                                        $(this).addClass("current");
                              }
                    });
                    // if any li has .current elmnt add class
                    selector.children("li").each(function () {
                              if ($(this).find(".current").length) {
                                        $(this).addClass("current");
                              }
                    });
                    // if no file name return
                    if ("" == FileName) {
                              selector.find("li").eq(0).addClass("current");
                    }
          }

          if ($(".main-menu__list").length) {
                    // dynamic current class
                    let mainNavUL = $(".main-menu__list");
                    dynamicCurrentMenuClass(mainNavUL);
          }

          if ($(".main-menu").length && $(".mobile-nav__container").length) {
                    let navContent =
                              document.querySelector(".main-menu").innerHTML;
                    let mobileNavContainer = document.querySelector(
                              ".mobile-nav__container"
                    );
                    mobileNavContainer.innerHTML = navContent;
          }
          if ($(".sticky-header__content").length) {
                    let navContent =
                              document.querySelector(".main-menu").innerHTML;
                    let mobileNavContainer = document.querySelector(
                              ".sticky-header__content"
                    );
                    mobileNavContainer.innerHTML = navContent;
          }

          if ($(".mobile-nav__container .main-menu__list").length) {
                    let dropdownAnchor = $(
                              ".mobile-nav__container .main-menu__list .dropdown > a"
                    );
                    dropdownAnchor.each(function () {
                              let self = $(this);
                              let toggleBtn = document.createElement("BUTTON");
                              toggleBtn.setAttribute(
                                        "aria-label",
                                        "dropdown toggler"
                              );
                              toggleBtn.innerHTML =
                                        "<i class='fa fa-angle-down'></i>";
                              self.append(function () {
                                        return toggleBtn;
                              });
                              self.find("button").on("click", function (e) {
                                        e.preventDefault();
                                        let self = $(this);
                                        self.toggleClass("expanded");
                                        self.parent().toggleClass("expanded");
                                        self.parent()
                                                  .parent()
                                                  .children("ul")
                                                  .slideToggle();
                              });
                    });
          }

          if ($(".mobile-nav__toggler").length) {
                    $(".mobile-nav__toggler").on("click", function (e) {
                              e.preventDefault();
                              $(".mobile-nav__wrapper").toggleClass("expanded");
                              $("body").toggleClass("locked");
                    });
          }

          if ($(".search-toggler").length) {
                    $(".search-toggler").on("click", function (e) {
                              e.preventDefault();
                              $(".search-popup").toggleClass("active");
                              $(".mobile-nav__wrapper").removeClass("expanded");
                              $("body").toggleClass("locked");
                    });
          }
          if ($(".mini-cart__toggler").length) {
                    $(".mini-cart__toggler").on("click", function (e) {
                              e.preventDefault();
                              $(".mini-cart").toggleClass("expanded");
                              $(".mobile-nav__wrapper").removeClass("expanded");
                              $("body").toggleClass("locked");
                    });
          }
          if ($(".odometer").length) {
                    $(".odometer").appear(function (e) {
                              var odo = $(".odometer");
                              odo.each(function () {
                                        var countNumber =
                                                  $(this).attr("data-count");
                                        $(this).html(countNumber);
                              });
                    });
          }

          if ($(".dynamic-year").length) {
                    let date = new Date();
                    $(".dynamic-year").html(date.getFullYear());
          }

          if ($(".wow").length) {
                    var wow = new WOW({
                              boxClass: "wow", // animated element css class (default is wow)
                              animateClass: "animated", // animation css class (default is animated)
                              mobile: true, // trigger animations on mobile devices (default is true)
                              live: true, // act on asynchronously loaded content (default is true)
                    });
                    wow.init();
          }

          if ($("#donate-amount__predefined").length) {
                    let donateInput = $("#donate-amount");
                    $("#donate-amount__predefined")
                              .find("li")
                              .on("click", function (e) {
                                        e.preventDefault();
                                        let amount = $(this).find("a").text();
                                        donateInput.val(amount);
                                        $("#donate-amount__predefined")
                                                  .find("li")
                                                  .removeClass("active");
                                        $(this).addClass("active");
                              });
          }

          $("#accordion .collapse").on("shown.bs.collapse", function () {
                    $(this).prev().addClass("active");
                    $(this).prev().parent().addClass("active");
          });

          $("#accordion .collapse").on("hidden.bs.collapse", function () {
                    $(this).prev().removeClass("active");
                    $(this).prev().parent().removeClass("active");
          });

          $("#accordion").on("hide.bs.collapse show.bs.collapse", (e) => {
                    $(e.target)
                              .prev()
                              .find("i:last-child")
                              .toggleClass("fa-plus fa-minus");
          });

          $(".add").on("click", function () {
                    if ($(this).prev().val() < 999) {
                              $(this)
                                        .prev()
                                        .val(+$(this).prev().val() + 1);
                    }
          });
          $(".sub").on("click", function () {
                    if ($(this).next().val() > 1) {
                              if ($(this).next().val() > 1)
                                        $(this)
                                                  .next()
                                                  .val(
                                                            +$(this)
                                                                      .next()
                                                                      .val() - 1
                                                  );
                    }
          });

          if ($(".tabs-box").length) {
                    $(".tabs-box .tab-buttons .tab-btn").on(
                              "click",
                              function (e) {
                                        e.preventDefault();
                                        var target = $(
                                                  $(this).attr("data-tab")
                                        );

                                        if ($(target).is(":visible")) {
                                                  return false;
                                        } else {
                                                  target.parents(".tabs-box")
                                                            .find(
                                                                      ".tab-buttons"
                                                            )
                                                            .find(".tab-btn")
                                                            .removeClass(
                                                                      "active-btn"
                                                            );
                                                  $(this).addClass(
                                                            "active-btn"
                                                  );
                                                  target.parents(".tabs-box")
                                                            .find(
                                                                      ".tabs-content"
                                                            )
                                                            .find(".tab")
                                                            .fadeOut(0);
                                                  target.parents(".tabs-box")
                                                            .find(
                                                                      ".tabs-content"
                                                            )
                                                            .find(".tab")
                                                            .removeClass(
                                                                      "active-tab"
                                                            );
                                                  $(target).fadeIn(300);
                                                  $(target).addClass(
                                                            "active-tab"
                                                  );
                                        }
                              }
                    );
          }
                     var cartsticky = document.querySelectorAll(".cartsticky");
                     var headerScrollPos = 130;

                     // Function to add a class after scrolling 130 pixels
                     function addClassOnScroll() {
                               if (window.pageYOffset > headerScrollPos) {
                                         for (
                                                   var i = 0;
                                                   i < cartsticky.length;
                                                   i++
                                         ) {
                                                   cartsticky[
                                                             i
                                                   ].classList.remove("nonee"); // Replace "your-new-class" with the class you want to add
                                         }
                               } else {
                                         for (
                                                   var i = 0;
                                                   i < cartsticky.length;
                                                   i++
                                         ) {
                                                   cartsticky[i].classList.add(
                                                             "nonee"
                                                   ); // Remove the class if scrolling is less than 130 pixels
                                         }
                               }
                     }

                     // Listen for the scroll event
                     window.addEventListener("scroll", addClassOnScroll);

 $(window).on("scroll", function () {
           if ($(".stricked-menu").length) {
                     var headerScrollPos = 130;
                     var stricky = $(".stricked-menu");
                     var cartsticky = $(".cartsticky");
                     if ($(window).scrollTop() > headerScrollPos) {
                               stricky.addClass("stricky-fixed");
                               cartsticky.addClass("nonee")

                     } else if ($(this).scrollTop() <= headerScrollPos) {
                               stricky.removeClass("stricky-fixed");
                               cartsticky.removeClass("nonee");
                     }
           }
           if ($(".scroll-to-top").length) {
                     var strickyScrollPos = 100;
                     if ($(window).scrollTop() > strickyScrollPos) {
                               $(".scroll-to-top").fadeIn(500);
                     } else if ($(this).scrollTop() <= strickyScrollPos) {
                               $(".scroll-to-top").fadeOut(500);
                     }
           }
 });
          if ($(".range-slider-price").length) {
                    var priceRange =
                              document.getElementById("range-slider-price");

                    noUiSlider.create(priceRange, {
                              start: [30, 150],
                              limit: 200,
                              behaviour: "drag",
                              connect: true,
                              range: {
                                        min: 10,
                                        max: 200,
                              },
                    });

                    var limitFieldMin = document.getElementById(
                              "min-value-rangeslider"
                    );
                    var limitFieldMax = document.getElementById(
                              "max-value-rangeslider"
                    );
                    var min = document.getElementById("min");
                    var max = document.getElementById("max");

                    priceRange.noUiSlider.on(
                              "update",
                              function (values, handle) {
                                        // Update the "min" and "max" elements with their respective values
                                        limitFieldMin.textContent = values[0];
                                        limitFieldMax.textContent = values[1];

                                        // You can also update the "min" and "max" input fields if needed

                                        min.attributes[0].value = values[0];
                                        max.attributes[0].value = values[1];
                              }
                    );
          }
})(jQuery);
