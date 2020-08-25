jQuery(document).ready(function() {
    // SCROLL TO DIV
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 500) {
            jQuery('.scrolltop').addClass('go_scrolltop');
        } else {
            jQuery('.scrolltop').removeClass('go_scrolltop');
        }
    });
    jQuery('.scrolltop').click(function() {
        jQuery('html, body').animate({
            scrollTop: jQuery("html").offset().top
        }, 1000);
    });

    // STICKY NAVBAR
    // var sticky = document.querySelector('.sticky');
    // if (sticky.style.position !== 'sticky') {
    // 	var stickyTop = sticky.offsetTop;
    // 	document.addEventListener('scroll', function () {
    // 		window.scrollY >= stickyTop ?
    // 		sticky.classList.add('fixed_menu') :
    // 		sticky.classList.remove('fixed_menu');
    // 	});
    // }
    // MENU MOBILE
    jQuery(".ham1").click(function() {
        jQuery("#menu_mobile_full").addClass('menu_show').toggleClass('toggle_menu_mobile');
        jQuery('.bg_opacity').toggle();
        jQuery('.logo_dark , .logo_light').toggle();
        var toggleWidth = $(".bg_opacity").width() == 10000 ? "0px" : "10000px";
        $('.bg_opacity').animate({
            width: toggleWidth
        }, 200);
        jQuery('#menu_mobile_full ul li').toggleClass("wow animated flipInX ", 2000);
    });
    $('.checkbox_svb').prop("checked", $('.checkbox_svb').prop("checked")); // uncheck when f5
    jQuery('.bg_opacity').click(function() {
        jQuery("#menu_mobile_full").removeClass('toggle_menu_mobile');
        jQuery(this).hide();
        jQuery('.logo_light').show();
        jQuery('.logo_dark').hide();
        jQuery(this).css({
            'width': '0px'
        });
        $('.checkbox_svb').prop("checked", !$('.checkbox_svb').prop("checked"));
    });
    jQuery("#menu_mobile_full ul li a").click(function() {
        jQuery(".icon_mobile_click").fadeIn(300);
        jQuery("#page_wrapper").removeClass('page_wrapper_active');
    });
    jQuery('.mobile-menu ul.menu').children().has('ul.sub-menu').click(function() {
        jQuery(this).children('ul').slideToggle();
        jQuery(this).siblings().has('ul.sub-menu').find('ul.sub-menu').slideUp();
    }).children('ul').children().click(function(event) {
        event.stopPropagation()
    });
    jQuery('.mobile-menu ul.menu').children().find('ul.sub-menu').children().has('ul.sub-menu').click(function() {
        jQuery(this).find('ul.sub-menu').slideToggle();
    });
    jQuery('.mobile-menu ul.menu li').has('ul.sub-menu').click(function(event) {
        jQuery(this).toggleClass('editBefore_mobile');
    });
    jQuery('.mobile-menu ul.menu').children().has('ul.sub-menu').addClass('menu-item-has-children');
    jQuery('.mobile-menu ul.menu li').click(function() {
        $(this).addClass('active').siblings().removeClass('active, editBefore_mobile');
    });


    // external JS: masonry.pkgd.js

    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer',

    });

    // fancybox
    jQuery('.fancybox').fancybox({
        buttons: [
            'slideShow',
            'share',
            'zoom',
            'fullScreen',
            'close'
        ],
        thumbs: {
            autoStart: true
        }
    });

    // ANIMATION INDEX
    var width = jQuery(window).width();
    if (width > 1200) {
        jQuery('.archive_masonry .grid-item').attr({
            "data-wow-delay": "0.3s",
            "data-wow-duration": "1s"
        }).addClass("wow animated zoomIn ");
        new WOW().init();
    }


    if (jQuery('#customer_review ul.cus_rv').length > 0) {
        jQuery('#customer_review ul.cus_rv').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: false,
            dots: false,
            arrows: true,
            autoplaySpeed: 3000,
            // fade: true,
            cssEase: 'linear',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }
    if (jQuery('#news_activity ul.sc_news').length > 0) {
        jQuery('#news_activity ul.sc_news').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: false,
            dots: false,
            arrows: true,
            autoplaySpeed: 3000,
            // fade: true,
            cssEase: 'linear',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }
        if (jQuery('#news_activity ul.sc_partner').length > 0) {
        jQuery('#news_activity ul.sc_partner').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: false,
            dots: false,
            arrows: true,
            autoplaySpeed: 3000,
            // fade: true,
            cssEase: 'linear',
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }
    

}); // document_load