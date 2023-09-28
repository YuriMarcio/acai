var swiper = new Swiper(".deliveryPedidos", {
    slidesPerView: 2,
    spaceBetween: 25,
    centeredSlides: true,
    preloadImages : false,
    lazy :{
      loadPrevNext: true,
    },
    breakpoints: {
      120: {
        slidesPerView: 1,
        spaceBetween: 35,
      },
      277: {
        slidesPerView: 1.5,
        spaceBetween: 35,
      },
      277: {
        slidesPerView: 1.5,
        spaceBetween: 35,
      },
      413: {
        slidesPerView: 2,
        spaceBetween: 35,
      },
      540: {
        slidesPerView: 2.5,
        spaceBetween: 35,
      },
    }
  });

