$(document).ready(function() {

    $('.lightHome span').click(function(){
        $('.lightHome, .overlay').fadeOut(300);	
    });
    
    $('.lightbox_own .close_lb').click(function(){
        $('.lightbox_own').fadeOut(300);
        $('#blackLayer').fadeOut(300);
    });
});