jQuery(document).ready(function($){
    createThumbPeople();
    initPeople();
    viewMore();
});

var createThumbPeople = function(){
    var items = jQuery('.people li');
    if (items.length>0){
        var img = '';
        var item = '';
        var append = '';
        var format = '<a href="#{{index}}" title="Ver caso">{{img}}</a>';
        jQuery('ul.people').after('<div class="thumbs" />');
        items.each(function(e){
            item = '<img src="'+$(this).children('.cont_img').find('img').attr('src')+'" alt="Foto">';
            console.log(item);
            append = format.replace('{{img}}', item);
            append = append.replace('{{index}}', e);
            jQuery('.thumbs').append(append);
        });
    }
}

var initPeople = function(){
    jQuery('.thumbs a:first').addClass('active');
    jQuery('.people li:first').css('z-index', 1);
    changePeople();
}

var changePeople = function(){
    jQuery('.thumbs').on('click', 'a:not(.active)', function(e){
        e.preventDefault();
        jQuery('.thumbs a').removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.people li').css('z-index', -1);
        jQuery('.people li:eq('+jQuery(this).attr('href').split('#')[1]+')').hide().css('z-index', 1).stop().fadeIn(300);
    })
}

var viewMore = function(){
    console.log();
    jQuery('.txt_here:not(.tcenter), .cont_left').click(function(){
        jQuery(this).css({'height': 'auto'});
    });
}