$(document).ready(function(){
    $('#preff').click(function(){
        $('#preff_inpt').stop().slideToggle();
        $(this).stop().parent('.this_block').toggleClass('active');
        $(this).find('.more').stop().toggleClass('rotate');
    });
    $('.cut .togg').click(function() {
        $(this).parents('.plan_conts').find('.cut_cont').stop().slideToggle(500);
        $(this).find('.more').stop().toggleClass('rotate');
    });
    $('.icon-cut').click(function() {
        $(this).parents('.cdo_sgl').find('.cut_cont').stop().slideToggle(500);
        $(this).find('.more').stop().toggleClass('rotate');
    });
    var element = $('#direcciones').html();
    
    $('#resumen').on('click','ol>li>div:not(.estimado, .adp-summary-duration)', function(){
        $(this).parents('#resumen').find('li').removeClass('adp-listsel').find('.ruta').remove();
        $(this).parents('li').addClass('adp-listsel');
        $(this).parents('li').append('<section class="ruta" style="float:none; clear:both;width:100%;"></section>');
        $(this).parents('li').find('.ruta').html('<div class="col-xs-12 load_cont"><div class="loading"><i></i><i></i><i></i></div></div>').delay(1000).hide(0, function(){
            $(this).html(element).fadeIn();
        });
    });
    var elem = $('.cont_paraderos').html();
    $('.list_comuna').on('click', '.comuna>div>p', function(){
        $(this).parents('.list_recorrido').find('.comuna>div>p').removeClass('active').find('.paraderos').remove();
        $(this).parents('.list_recorrido').find('.paraderos').remove();
        $(this).addClass('active');
        $(this).parents('.list_recorrido').find('.set_paraderos').append('<section class="paraderos" style="float:none; clear:both;width:100%; overflow:hidden;"></section>');
        $(this).parent('div').append('<section class="paraderos mob tab" style="float:none; clear:both;width:100%; overflow:hidden;"></section>');
        $(this).parents('.list_recorrido').find('.paraderos').html('<div class="col-xs-12 load_cont"><div class="loading"><i></i><i></i><i></i></div></div>').delay(1000).hide(0, function(){
        $(this).html(elem).fadeIn();
        });
    });
    $('.scrollable').jScrollPane();
	var settings = {
		showArrows: false,
		autoReinitialise: true
	};
	var pane = $('.scrollable')
	pane.jScrollPane(settings);
	var contentPane = pane.data('jsp').getContentPane();
});