$(document).ready(function(){
    $('.tab_head').click(function() {
        $(this).next().stop().slideToggle(500);
        $(this).find('.open').toggleClass('close')
    });
    $('.tab_text').slideUp(300);
    $('.bxslider').bxSlider({
        auto: true,
    });
    setTimeout(function(){
        altoCajasHalf();
        altoCajasThird();
    }, 200);
    
    $('.btn_toggle').click(function(){ 
        $(this).parents('.cont_toggle').find('.toggle').stop().slideToggle(400);
        $(this).stop().toggleClass('active');
    });
    
    $('.up').click(function(){
        $('.cont_light').fadeIn();
        $('.close').fadeIn();
    });
    $('.opac, .close').click(function(){
        $('.cont_light').fadeOut();
        $('.close').fadeOut();
    });
    
});

var altoCajasHalf = function(){
    var index = 0;
    var alto = 0;
    $('.col-half').each(function(e){
        index = e+1;
        alto = 0;
        if(index % 2 === 0  ){
            alto = $(this).height();
            if ($(this).prev().height()>alto) alto = $(this).prev().height();    
            $(this).height(alto).prev().height(alto);
        }
    });
}

var altoCajasThird = function(){
    var index = 0;
    var alto = 0;
    $('.third').each(function(e){
        index = e+1;
        alto = 0;
        if(index % 3 === 0  ){
            alto = $(this).height();
            if ($(this).prev().height()>alto) alto = $(this).prev().height();    
            if ($(this).prev().prev().height()>alto) alto = $(this).prev().prev().height();    
            $(this).height(alto).prev().height(alto).prev().height(alto);
        }
    });
}
