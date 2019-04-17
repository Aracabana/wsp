$(document).ready(function () {
    var windowW;
    $(window).resize(function () {
        windowW = $(window).width();
        if (windowW >= 992) {
            $('#js-menu').removeAttr('style');
            $('#js-menu-btn').removeClass('open');
        }
    });
    $(window).trigger('resize');
    
    //scroll menu
    var menu = $('#js-menu-wrapper');
    var menuTop = menu.offset().top;
    $(window).scroll(function () {
        fixMenu();
    });
    fixMenu();
    function fixMenu() {
        if ($(window).scrollTop() >= menuTop) {
            menu.addClass('fixed');
        } else {
            menu.removeClass('fixed');
        }
    }
    
    //mobile menu
    $('#js-menu-btn').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('open');
        $('#js-menu').slideToggle();
    });
    $('.js-submenu-item').click(function (e) {
        if (windowW <= 991) {
            e.preventDefault();
            $(this).toggleClass('active');
            $(this).next('.js-submenu').slideToggle();
        }
    });
    
    //portfolio-slider
    if ($('#js-portfolio-slider')) {
        $('#js-portfolio-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    }
    
    //reviews-slider
    if ($('#js-reviews-slider')) {
        $('#js-reviews-slider').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    }
    
    //portfolio-slider
    if ($('#js-articles-slider')) {
        $('#js-articles-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    }
    
    //review form add photo
    $('.js-file').change(function() {
        var file = $(this),
            fileValue = file.val(),
            label = file.next('.js-file-label');
        if (fileValue !== '') {
            label.text(fileValue);
        }
    });
    
    //review letters
    if ($('.swipebox')) {
        $( '.swipebox' ).swipebox( {
            useCSS : true,
            useSVG : false,
            removeBarsOnMobile: false
        } );
    }
});
