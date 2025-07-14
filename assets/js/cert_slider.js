console.log("slideeerrrrrrrrrrrrrrr")
  const swiper = new Swiper('.mySwiper', {
    slidesPerView: 6,
    spaceBetween: 6,
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    speed: 600,
    breakpoints: {
      320: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 6,
      },
    },
  });