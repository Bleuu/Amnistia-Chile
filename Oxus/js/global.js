$(document).ready (function() {
    $('.bxslider, .text_slider').bxSlider({
        pagerCustom: '#bx-pager',
        auto: true
    });
    $('.experience').bxSlider({
        pagerCustom: '.pag_exp'
    });
    $('header nav a').click(function(e){
        var target = $(this).attr("href");
        goToSection(target, e); 
    });

    $(".npt").on('blur', function(){
        $(this).parents('.frm').removeClass('active');
    });

    $(".npt").on('focus', function(){
        $(this).parents('.frm').addClass('active');
    });

    $('.frm').mouseleave(function(){
        var focus = false;
        $(this).find(':input').each(function(){
            if($(this).is(':focus')){
                focus = true;
            }
        });
        if (!focus) $(this).removeClass('active');
    });

    menuActive();

    $('#hacemos .manejamos').css({'position':'relative','top':50,'opacity':0});
    $('#clientes li').css('opacity',0);
    $('#hacemos .do img').css('opacity',0);
    $('#experiencia .dat li span').css('opacity',0);

});

var goToSection = function(idSection, e) {
    e.preventDefault();
    $('body,html').stop().animate({scrollTop:  $(idSection).offset().top-70}, 1000);
}

var menuActive = function(){
    var scrolltop;
    var menuAnchor = $('header nav a');
    var offset = 100;
    var offsetAnimate = ($(window).height()/2)-offset;
    var hacemos = [];
    var experiencia = [];
    var clientes = [];
    var contacto = [];
    var heightHeader = $('header').outerHeight();
    hacemos['menu'] = $('header nav a[href="#hacemos"]');
    hacemos['pos_top'] = $('#hacemos').offset().top - heightHeader - offset;
    experiencia['menu'] = $('header nav a[href="#experiencia"]');
    experiencia['pos_top'] = $('#experiencia').offset().top - heightHeader - offset;
    clientes['menu'] = $('header nav a[href="#clientes"]');
    clientes['pos_top'] = $('#clientes').offset().top - heightHeader - offset;
    clientes['height'] = $('#clientes').outerHeight();
    contacto['menu'] = $('header nav a[href="#contacto"]');
    contacto['pos_top'] = $('#contacto').offset().top - heightHeader - offset;



    $(window).scroll(function(){
        scrolltop = $(window).scrollTop();

        //Menu Active on Scroll
        if (scrolltop<hacemos['pos_top'] && scrolltop<hacemos['pos_top']){
            if (!menuAnchor.parent().find('a:first').hasClass('active')){
                menuAnchor.removeClass('active');
                menuAnchor.parent().find('a:first').addClass('active');
                changeURL('/');
            }
        }
        if (scrolltop>=hacemos['pos_top'] && scrolltop<experiencia['pos_top']){
            if (!hacemos['menu'].hasClass('active')){
                menuAnchor.removeClass('active');
                hacemos['menu'].addClass('active');
                changeURL(hacemos['menu'].data('slug'));
            }
        }
        if (scrolltop>=experiencia['pos_top'] && scrolltop<clientes['pos_top']){
            if (!experiencia['menu'].hasClass('active')){
                menuAnchor.removeClass('active');
                experiencia['menu'].addClass('active');
                changeURL(experiencia['menu'].data('slug'));
            }
        }
        if (scrolltop>=clientes['pos_top']){
            if (!clientes['menu'].hasClass('active')){
                menuAnchor.removeClass('active');
                clientes['menu'].addClass('active');
                changeURL(clientes['menu'].data('slug'));
            }
        }
        if (scrolltop>=contacto['pos_top']-200){
            if (!contacto['menu'].hasClass('active')){
                menuAnchor.removeClass('active');
                contacto['menu'].addClass('active');
                changeURL(contacto['menu'].data('slug'));
                $('#contacto form input[type="text"]:first').focus();
            }
        }

        //Animate elements on scroll
        if (scrolltop>(hacemos['pos_top']-offsetAnimate)){
            if(!$('#hacemos .do img').css('opacity')==0){
                $('#hacemos .do img').each(function(e){
                    $(this).delay(100*e).animate({opacity:1}, {
                        duration:'slow',
                        easing: 'easeInCubic'
                    });
                });
                $('#hacemos .manejamos').delay(300).animate({'opacity':1,'top':0},{
                    duration:'slow',
                    easing: 'easeOutQuint'
                });
            }
        }
        if (scrolltop>(experiencia['pos_top']-offsetAnimate)){
            if(!$('#experiencia .dat li span').css('opacity')==0){
                $('#experiencia .dat li span').each(function(e){
                    $(this).delay(100*e).animate({opacity:1}, {
                        duration:'slow',
                        easing: 'easeInCubic'
                    });
                });
            }
        }
        if (scrolltop>(clientes['pos_top']-offsetAnimate-200)){
            if(!$('#clientes li').css('opacity')==0){
                $('#clientes li').each(function(e){
                    $(this).delay(100*e).animate({opacity:1}, {
                        duration:'slow',
                        easing: 'easeInCubic'
                    });
                });
            }
        }
    });

}

var changeURL = function(slug){
    var title = $(document).find('title').text();
    var url = $('input[name="url"]').val();
//    window.history.pushState('obj', title, url+slug);
//    document.title = title;
    return false;
}

/*===============================
    SMOOTH SCROLL
=================================*/
//if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
//window.onmousewheel = document.onmousewheel = wheel;
//
//function wheel(event) {
//    var delta = 0;
//    if (event.wheelDelta) delta = event.wheelDelta / 120;
//    else if (event.detail) delta = -event.detail / 3;
//
//    handle(delta);
//    if (event.preventDefault) event.preventDefault();
//    event.returnValue = false;
//}
//
//function handle(delta) {
//    var time = 600;
//    var distance = 400;
//
//    $('html, body').stop().animate({
//        scrollTop: $(window).scrollTop() - (distance * delta)
//    }, time );
//}