document.addEventListener("DOMContentLoaded", function () {
  const swiperElement = document.querySelector(".portfolio-swiper");

  if (swiperElement && typeof Swiper !== "undefined") {
    new Swiper(swiperElement, {
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 20,
      loop: true,
      speed: 800,
      centeredSlides: false,
      watchOverflow: true,

      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },

      pagination: {
        el: swiperElement.querySelector(".swiper-pagination"),
        clickable: true,
      },

      navigation: {
        nextEl: swiperElement.querySelector(".swiper-button-next"),
        prevEl: swiperElement.querySelector(".swiper-button-prev"),
      },

      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 15,
        },

        600: {
          slidesPerView: 2,
          spaceBetween: 20,
        },

        1024: {
          slidesPerView: 3,
          spaceBetween: 25,
        },
      },
    });
  }

  // FACILITY ROUTING
  const facilityPages = {
    "ground-floor-banquet-hall": "/facilities/ground-floor-banquet-hall/",
    "first-floor-banquet-hall": "/facilities/first-floor-banquet-hall/",
    "vip-restaurant": "/facilities/vip-restaurant/",
    "executive-restaurant": "/facilities/executive-restaurant/",
    "pergola-bar": "/facilities/pergola-bar/",
    "conference-room": "/facilities/conference-room/",
  };

  window.viewProject = function (projectId) {
    const pageUrl = facilityPages[projectId];

    if (pageUrl) {
      window.location.href = pageUrl;
    } else {
      console.error("Facility page not found:", projectId);
    }
  };

  window.viewAllProjects = function () {
    window.location.href = "/facilities/";
  };
});
