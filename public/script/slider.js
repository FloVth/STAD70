const swiperLogos = new Swiper('.mySwiper', {
    autoplay: {
    delay: 5000,
    },
    slidesPerView: "3",
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
    el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },

    breakpoints: {
    0: {
        slidesPerView: 1
    },
    1000:{
        slidesPerView: 2
    },
    1500: {
        slidesPerView: 3
    }
    }
});
