function corebanner_initCallback(carousel) {
	$('#corebanner_ctrl').hover(function() {
		carousel.stopAuto();
	}, function(){
		carousel.startAuto();	
	});
	
	//toma el índice del botón clickeado
	jQuery('#corebanner_ctrl li').bind('click', function() {
		var indice = jQuery(this).attr('id').split('cor');
		carousel.scroll(jQuery.jcarousel.intval(indice[1]));
		return false;
	});
};

$(document).ready(function() {
   
   //COREBANNER
	$(".jcarousel").jcarousel({
		auto: 6,
		scroll: 1,
		wrap: 'last',
		animation:'slow',
		initCallback: corebanner_initCallback,
		itemVisibleInCallback: {
			onBeforeAnimation: function(carousel, item, idx, state){
				item = jQuery(item).attr('jcarouselindex');
				jQuery('#corebanner_ctrl li').removeClass('current');
				jQuery('#corebanner_ctrl li#cor'+item).addClass('current');
			}
		}
	});
	
	//PrettyPhoto
	$("a[rel^='prettyPhoto']").prettyPhoto();
	
//    $(".jcarousel").jcarousel({
//	    auto: 1,
//	    scroll: 1,
//	    wrap: 'circular',
//	    animation:'slow',
//	    initCallback: slider_initCallback,
//	    
//    });
    
});

//FUNCIONALIDADES

//function flecha_color(programa_li){
//    flecha = $('#arrow');
//    programa_color = programa_li.css('background-color');
//    flecha.css({
//        'border-bottom-color': programa_color
//    });
//}

