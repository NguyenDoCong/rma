jQuery(document).ready(function ($) {
    $('.expertise-posts').slick({
        centerMode: true,
        // centerPadding: '10px',
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        dots: true,
        infinite: true,
        speed: 600,  // Try reducing the speed
        cssEase: 'ease-out',
        appendArrows: $('.expertise-pagination-arrow'),
        prevArrow: $('.expertise-pagination-prev'),
        nextArrow: $('.expertise-pagination-next'),
        appendDots: $('.expertise-pagination-dots'),
        // lazyLoad: 'progressive',  // Có thể thử 'progressive' hoặc tắt 'lazyLoad'
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    // variableWidth: false
                }
            },
        ]
    });

    $('.cases-posts').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        dots: true,
        // infinite: true,
        appendArrows: $('.cases-pagination-arrow'),
        prevArrow: $('.cases-pagination-prev'),
        nextArrow: $('.cases-pagination-next'),
        appendDots: $('.cases-pagination-dots'),
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    variableWidth: false
                }
            },
        ]
    });

    $('.sustainability-posts').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: true,
        appendArrows: $('.sustainability-pagination-arrow'),
        prevArrow: $('.sustainability-pagination-prev'),
        nextArrow: $('.sustainability-pagination-next'),
        appendDots: $('.sustainability-pagination-dots'),
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    // variableWidth: false
                }
            },
        ]
    });

})

