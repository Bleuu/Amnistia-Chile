jQuery(document).ready(function(){ 
    $('.bxslider').each(function(){
        var img_cant = $(this).find('img').length;
        if(img_cant>1){
            initCarrusel($(this));
        }
    });
    $('ul.dir li:nth-child(2n + 1)').css('clear', 'left');
    $('.testimonio').click( function(){
        $(this).parents('li').find('.normal').fadeOut( function(){
            $(this).parents('li').find('.extend').fadeIn();
        });
    });
    $('.back_test, .close').click( function(){
        $(this).parents('li').find('.extend').fadeOut( function(){
            $(this).parents('li').find('.normal').fadeIn();
        });
    });
    $('.dir li:odd').addClass('cleft');
});

var initCarrusel = function(ele){
    var slider = ele.bxSlider({
        auto: true,
        mode: 'fade',
        controls: false,
        responsive: true,
        autoStart: true
    });
}