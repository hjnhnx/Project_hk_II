if (document.querySelector('.info-carousel')) {
    let SwiperInfo = new Swiper('.info-carousel', {
        spaceBetween: 0,
        slidesPerView: 'auto',
        allowTouchMove: true,
        disableOnInteraction: true
    });
}
if (document.querySelector('.news-carousel')) {
    let SwiperTop = new Swiper('.news-carousel', {
        spaceBetween: 0,
        centeredSlides: true,
        speed: 6000,
        autoplay: {delay: 1,},
        loop: true,
        slidesPerView: 'auto',
        allowTouchMove: true,
        disableOnInteraction: true
    });
}
if (document.querySelector('#home-banner-gallery')) {
    var galleryThumbs = new Swiper('#home-banner-info', {
        spaceBetween: 0,
        slidesPerView: 5,
        loop: true,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('#home-banner-gallery', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 1000,
        autoHeight: false,
        autoplay: {delay: 4000, disableOnInteraction: false,},
        navigation: {nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev',},
        loop: true,
        allowTouchMove: true,
        on: {slideChange: lazyload,},
        thumbs: {swiper: galleryThumbs}
    });
}
