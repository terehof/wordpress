$(document).ready(function() {
    $('.flexslider').flexslider({
        animation: "fade",
        controlNav: false,
        prevText: '',
        nextText: ''
    });

    $('input[type="checkbox"]').uniform();


    var touch 	= $('#touch-menu');
    var menu 	= $('nav > div > ul');

    $(touch).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
        return false;
    });

    $(window).resize(function(){
        var w = $(window).width();
        if(w > 767 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });


    $('.app_for_calc_btn').click( function() {
        $('.calc_form').slideToggle();
    });

    $('nav .menu-item').hover(
        function() {
            $(this).find('.sub-menu').stop().slideToggle();
        },
        function() {
            $(this).find('.sub-menu').stop().slideToggle();
        }
    );

    function popup_open() {
        $('.popup_bg').fadeIn(250);
        $('.popup_callback').fadeIn(250);
        var popupWidth = $('.popup_callback').width();
        var popupHeight = $('.popup_callback').height();
        $('.popup_callback').css('margin-left', -popupWidth/2);
        $('.popup_callback').css('margin-top', -popupHeight/2);
    }
    function popup_close() {
        $('.popup_callback').fadeOut(250);
        $('.popup_bg').fadeOut(250);
    }
    $('.callback_btn').click(function () {
        popup_open();
    })
    $('.close_popup, .popup_bg').click(function() {
        popup_close();
    })


});