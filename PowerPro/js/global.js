jQuery(document).ready(function(){
    var slider = $('.bxslider').bxSlider({
        auto: true,
        mode: 'fade',
        controls: false,
        pagerCustom: '#bx-pager',
        responsive: true
    });
    
    $('#bx-pager a').click(function (e) {
        var i = $(this).index();
        slider.goToSlide(i);
        slider.stopAuto();
        restart = setTimeout(function () {
            slider.startAuto();
        }, 600);
        return false;
    });
    $('nav > .barra_sup > .tit').click(function () {
        if ($('body').hasClass('mobile')){
            $('nav > .menu').stop().slideToggle();
            $(this).toggleClass('active');
//            if($(this).hasClass('active')){
//                $(this).removeClass('active');
//            }else{
//                $(this).addClass('active');
//            }
        }
    });
    $('.sbar .select_mob ').click(function () {
        $('.sbar ul').stop().slideToggle();
        $(this).toggleClass('active');
    });
    $('.menu_mob_icon').click(function() {
        if($(this).hasClass('ocultar')){
            $('.container').stop().animate({'right' : '0'});
            $(this).removeClass('ocultar');
        }else{
            $('.container').stop().animate({'right' : '80%'});
            $(this).addClass('ocultar');
        }
    });
    
    //comprueba si estoy en resolucion movil
    if ($('header .menu').css('position')=='relative'){
        $('body').addClass('mobile');
    }
});

 $(window).resize(function(){
    if ($('header .menu').css('position')=='relative'){
        $('body').addClass('mobile');
    }else{
        $('body').removeClass('mobile');
    }
});

