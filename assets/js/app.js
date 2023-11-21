/** @format */
(() => {
  //ナビゲーションバー設定
  const $nav = document.querySelector(".header .navbar");
  const $menuBtn = document.querySelector("#menu-btn");

  $menuBtn.addEventListener("click", () => {
    $nav.classList.toggle("active");
    $menuBtn.classList.toggle("fa-times");
  });

  window.onscroll = () => {
    $nav.classList.remove("active");
    $menuBtn.classList.remove("fa-times");
  };

  //home スワイパー設定
  var swiper = new Swiper(".home-slider", {
    loop: true,
    spaceBetween: 20,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var swiper = new Swiper(".service-slider", {
    loop: true,
    spaceBetween: 20,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    // Responsive breakpoints
    breakpoints: {
      450: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
    },
  });

  //pricing page swiper設定
  var swiper = new Swiper(".reviews-slider", {
    loop: true,
    spaceBetween: 20,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    breakpoints: {
      450: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
    },
  });

  //portfolio page lightgallery.js設定
  lightGallery(document.querySelector('.portfolio .portfolio-container'));

})();
