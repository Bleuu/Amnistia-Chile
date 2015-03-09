$(document).ready(function() {
    //ARREGLOS DE CSS
    $('.primary article:first').css('border-top','none');
    $('.primary article:last').css('border-bottom','none');
    var alto_contenido = $('#content').outerHeight();
    if (alto_contenido>$('#form').height() && $(window).width()>1150){
        $('#form').css('height', alto_contenido);
    }
    //FUNCIONALIDADES WORDPRESS

    //funcionalidad de Tabs en Actua
    //$('.sb_labels li:first').addClass('active');
    $('.sb_labels li').click(function(e) {
        e.preventDefault();
        var idPost = $(this).data('tab');
        $('.sb_labels li').removeClass('active');
        $(this).addClass('active');
        $('.insb_right li').hide();
        $('.insb_right li#info'+idPost).fadeIn(700);
    });

    $('.img_fp').append('<div class="layerImg"/>');

    //Menú
    $('nav ul li').mouseenter(function(){
        $(this).find('.submenu').fadeIn(200);
    }).mouseleave(function(){
        $(this).find('.submenu').stop().fadeOut(200);
    });

    //Slider
    if ($('.container.slider').length>0){
        $('.container.slider .slider_images').jcarousel({
            wrap: 'both'
        }).jcarouselAutoscroll({
            interval: 7000,
            target: '+=1',
            autostart: true
        });

        $('.slider_numbers')
        .on('jcarouselpagination:active', 'a', function() {
            $(this).addClass('active');
        })
        .on('jcarouselpagination:inactive', 'a', function() {
            $(this).removeClass('active');
        })
        .jcarouselPagination();

        $('.control.butNext').jcarouselControl({
            target: '+=1'
        });
        $('.control.butPrev').jcarouselControl({
            target: '-=1'
        });
    }
    //DATEPICKER
    $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        minDate: 0,
        maxDate: "+15Y"
    });
    //LIGHTBOX CARTA
    $('#letter').click( function() {
        $('.letter_box').fadeIn();
    });
    $('#lt_close').click( function() {
        $('.letter_box').fadeOut();
    });
});

//FUNCIONES

$(window).resize(function(){
    if($(window).width()<1150){
        $('#form').css('height', auto);
    }else{
        var alto_contenido = $('#content').outerHeight();
        if (alto_contenido>$('#form').height() && $(window).width()>1150){
            $('#form').css('height', alto_contenido);
        }
    }
})