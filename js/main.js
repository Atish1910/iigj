(function ($) {
    "use strict";
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show')
            }
        }, 1)
    };
    spinner();
    new WOW().init();
   
    
     // Sticky Navbar
     $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow').css('top', '-100px');
        }
    });
    
    $('.form_servi').on('change', function () {
        let a = $(this).val()
        $('.form_deptart optgroup').addClass('d-none')
        $('.form_deptart optgroup[label="' + a + '"]').removeClass('d-none')
    })
    $('.dept_01').on('change', function () {
        let a = $(this).val()
        $('.programm_01 optgroup').addClass('d-none')
        $('.programm_01 optgroup[label_02="' + a + '"]').removeClass('d-none')
    })
    $('.course_01').on('change', function () {
        let a = $(this).val()
        $('.course_data').addClass('d-none')
        $('.course_data[label="' + a + '"]').removeClass('d-none')
    })
    let q = 0;
    $(window).scroll(function () {
        let b = $(window).scrollTop()
        if (q == 0) {
            if (b > 5000) {
                $('.count').each(function () {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 5000,
                        easing: 'swing',
                        step: function (now) {
                            $(this).text(Math.ceil(now))
                        }
                    })
                });
                q++
            }
        }
    })
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        center: false,
        dots: false,
        nav: true,
        navText: ['<i class="bi bi-chevron-left"></i>', '<i class="bi bi-chevron-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            }
        }
    });
    
    $(".popup-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        center: false,
        dots: false,
        nav: true,
        navText: ['<i class="bi bi-chevron-left"></i>', '<i class="bi bi-chevron-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    });
    $(".company-carousel").owlCarousel({
        autoplay: !0,
        smartSpeed: 1000,
        margin: 25,
        loop: !0,
        center: !1,
        dots: !0,
        nav: !0,
        navText: ['<i class="bi bi-chevron-left"></i>', '<i class="bi bi-chevron-right"></i>'],
        responsive: {
            0: {
                items: 2
            },
            576: {
                items: 3
            },
            992: {
                items: 4
            }
        }
    });
    $('[data-bgimg]').each(function () {
        $(this).css('background-image', 'url(' + $(this).data('bgimg') + ')')
    })
    $('.counter-value').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 3500,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now))
            }
        })
    })
})(jQuery)