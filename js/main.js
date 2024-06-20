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
            $('.sticky-top').removeClass('shadow').css('top', '-100px');
        }
    });




    $('.form_servi').on('change', function () {
        let a = $(this).val()
        $('.form_deptart optgroup').addClass('d-none')
        $('.form_deptart optgroup[label="' + a + '"]').removeClass('d-none')
    })
    
    
    
    // $('.course_01').on('change', function () {
    //     let a = $(this).val()
    //     $('.course_data').addClass('d-none')
    //     $('.course_data').removeClass('d-none')
    // })

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
            if (b > 3000) {
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
        nav: false,
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
                items: 3
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

    $(".city-carousel").owlCarousel({
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
                items: 2
            },
            992: {
                items: 4
            }
        }
    });
    
    $(".facilities-carousel").owlCarousel({
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
                items: 2
            },
            992: {
                items: 3
            }
        }
    });

    
    // Project and Testimonial carousel
    $(".students-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        center: false,
        dots: true,
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
                items: 1
            },
            992: {
                items: 1
            }
        }
    });

    
    
    // Project and Testimonial carousel
    $(".infra-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        center: false,
        dots: true,
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
                items: 1
            },
            992: {
                items: 1
            }
        }
    });

    $(".h_our").owlCarousel({
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
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2.1
            }
        }
    });
    // $('.h_our').data('owl.carousel').difference = function(first, second) {
    //     return {
    //         x: first.x - second.x + (first.y - second.y),
    //         y: first.y - second.y
    //     };
    // };

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
    // $("a.nav-link").on('click', function (e) {
    //     e.preventDefault();
    //     var target = $(this).attr('href');
    //     $('html, body').animate({
    //         scrollTop: ($(target).offset().top - 80)
    //     }, 5);
    //     setTimeout(function () {
    //         $('.navbar-toggler').click()
    //     }, 1000);
    // });
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

    $(document).ready(function () {
        $('.enqui_form_ai').on('submit', function () {
            var nform = $(this);
            // let url = $(this).find(".ngaction").data("nsform");
            let url = 'sen_mail.php';
            var btn = true;

            nform.find('input, textarea,select').each(function () {
                var n = $(this).val();
                if ($.trim(n) == "") {
                    $(this).css("border", "1px solid red");
                    btn = false;
                } else {
                    $(this).css("border", "1px solid #ccc");
                }
            });
            if (btn == true) {
                var mbtn = nform.find('button');
                mbtn.html('Please Wait...');
                mbtn.attr('disabled', true);
                mbtn.css("cursor", "not-allowed");
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: nform.find(":input").serializeArray(),
                    success: function (data) {
                        if (data == "y") {
                            nform.find('.success1').html('Thankyou For Your Enquiry');
                            setTimeout(function () {
                                mbtn.attr('disabled', false);
                                mbtn.css("cursor", "pointer");
                                window.location.href = 'thankyou';
                            }, 2000)
                        } else {
                            nform.find('.error1').html(data);
                            setTimeout(function () {
                                nform.find(".error1").html("")
                                mbtn.html('Submit');
                            }, 4000)
                            mbtn.attr('disabled', false);
                            mbtn.css("cursor", "pointer");
                        }
                    }
                });
            }
            console.log(btn);
            return false;
        })
        $(".dropdown-submenu > a").on("click", function (e) {
            // Prevent the default behavior of the link
            e.preventDefault();
            // Toggle the display of the sub-sub dropdown menu
            var subsubmenu = $(this).next();
            subsubmenu.toggle();
            // Stop the event propagation to the parent elements
            e.stopPropagation();
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