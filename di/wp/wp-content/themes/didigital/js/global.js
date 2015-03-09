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
    $('.cl_lnk a:nth-child(2n)').after('<div style="clear: both;"><div>');
    
})