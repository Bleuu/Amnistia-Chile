$(document).ready(function() {
    //ARREGLOS DE CSS
    $('.primary article:first').css('border-top','none');
    $('.primary article:last').css('border-bottom','none');
    
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
            maxDate: "-5Y",
            yearRange: "1950:-10Y"
        });
});

//FUNCIONES
