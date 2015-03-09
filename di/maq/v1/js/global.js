$(document).ready(function(){
    $('.bxslider').bxSlider({
        infiniteLoop: false,
        auto: true,
        onSlideBefore: function(e){
            var cant = $('.bxslider>li').length-1;
            if(e.index()>=cant){
                $('.bx-controls .bx-next').fadeOut(300);
            }else{
                $('.bx-controls .bx-next').fadeIn(300);
            }

            if(e.index()==0){
                $('.bx-controls .bx-prev').fadeOut(300);
            }else{
                $('.bx-controls .bx-prev').fadeIn(300);
            }
        },
        onSliderLoad: function(){
            $('.bx-controls .bx-prev').fadeOut(300);
        }
    });
    //CAMBIO SLIDER
    $('.ver_mas').click(function(e) {
        e.preventDefault();
        $(this).parents('li').find('.inner_box').fadeIn();
        $(this).parents('li').find('.cnt_banner').fadeOut();
        $('.bx-controls').fadeOut();
    });
    $('.ver_menos, .btn_close').click(function(e) {
        e.preventDefault();
        $('.inner_box').fadeOut();
        $(this).parents('li').find('.cnt_banner').fadeIn();
        $('.bx-controls').fadeIn();
    });
    //LIGHTBOX PHOTOS
    //    $('.ban_img').click(function(){
    //        $('.light_img:first').find('.loading').show();
    //        $('.light_img:first').fadeIn().find('img').hide().attr('src', $(this).attr('data-img'));
    //        $('.light_img:first img').load(function(){
    //            $(this).fadeIn(300);
    //            $(this).parent().find('.loading').hide();
    //        })
    //        $('.opac').fadeIn();
    //
    //        /*
    //        $('.light_img[data-show="'+$(this).attr('data-img')+'"]').fadeIn();
    //        $('.opac').fadeIn();
    //        */
    //    });
    //    $('.exit, .opac').click(function(){
    //        $('.light_img, .opac').fadeOut();
    //    });
    $('header ul li a').click(function(e){
        var target = $(this).attr("href");
        goToSection(target, e); 
    });

    menuActive();
});

var goToSection = function(idSection, e) {
    e.preventDefault();
    $('body,html').stop().animate({scrollTop:  $(idSection).offset().top-$('header').outerHeight()}, 1000);
}
var menuActive = function(){
    var scrolltop;
    var menuAnchor = $('header ul a');
    var offset = 20;
    var offsetAnimate = ($(window).height()/2)-offset;
    var inicio = [];
    var servicios = [];
    var clientes = [];
    var nosotros = [];
    var contacto = [];
    var secciones = [inicio, servicios, clientes, nosotros, contacto];
    var heightHeader = $('header').outerHeight();
    inicio['menu'] = $('header ul a[href="#banner"]');
    inicio['pos_top'] = $('#banner').offset().top - heightHeader - offset;
    servicios['menu'] = $('header ul a[href="#service"]');
    servicios['pos_top'] = $('#service').offset().top - heightHeader - offset;
    clientes['menu'] = $('header ul a[href="#clientes"]');
    clientes['pos_top'] = $('#clientes').offset().top - heightHeader - offset;
    clientes['height'] = $('#clientes').outerHeight();
    nosotros['menu'] = $('header ul a[href="#equipo"]');
    nosotros['pos_top'] = $('#equipo').offset().top - heightHeader - offset;
    contacto['menu'] = $('header ul a[href="#contacto"]');
    contacto['pos_top'] = $('#contacto').offset().top - heightHeader - offset;



    $(window).scroll(function(){
        scrolltop = $(window).scrollTop();

        //Menu Active on Scroll

        if (scrolltop>=0 && scrolltop<servicios['pos_top']){
            console.log(scrolltop);

            if (!inicio['menu'].hasClass('active')){
                menuAnchor.removeClass('active');
                inicio['menu'].addClass('active');
            }
        }
        if (scrolltop>=servicios['pos_top'] && scrolltop<clientes['pos_top']){
            if (!servicios['menu'].hasClass('active')){
                menuAnchor.removeClass('active');
                servicios['menu'].addClass('active');
            }
        }
        if (scrolltop>=clientes['pos_top'] && scrolltop<nosotros['pos_top']){
            if (!clientes['menu'].hasClass('active')){
                menuAnchor.removeClass('active');
                clientes['menu'].addClass('active');
            }
        }
        if (scrolltop>=nosotros['pos_top']){
            if (!nosotros['menu'].hasClass('active')){
                menuAnchor.removeClass('active');
                nosotros['menu'].addClass('active');
            }
        }
        if (scrolltop>=contacto['pos_top']-200){
            if (!contacto['menu'].hasClass('active')){
                menuAnchor.removeClass('active');
                contacto['menu'].addClass('active');
                $('#contacto form input[type="text"]:first').focus();
            }
        }
    });

}
