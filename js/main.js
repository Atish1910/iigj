(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow').css('top', '0px');
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

    // counter in placement
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
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
                q++
            }
        }
    })


    // Project and Testimonial carousel
    $(".project-carousel, .testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        center: false,
        dots: false,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
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
    // Project and Testimonial carousel
    $(".company-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        center: false,
        dots: true,
        nav: false,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
        responsive: {
            0: {
                items: 2.1
            },
            576: {
                items: 3
            },
            992: {
                items: 7.1
            }
        }
    });

    
    let lglink = window.location.href;
    $('.navbar-nav a[href="' + lglink + '"]').addClass('active');

    function getCookie(cname) {
        let name = cname + "=";
        let ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    $('.h_cour_rer .dropdown-menu a').on('click', function (e) {
        let nams = $(this).data('cours');
        document.cookie = "nams=" + nams
    })
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
                $(this).text(Math.ceil(now));
            }
        });
    });


    $(function () {
        var dtToday = Date();
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();
        var maxDate = year + '-' + month + '-' + day;
        $('#inputdate').attr('min', maxDate);
    });


})(jQuery);