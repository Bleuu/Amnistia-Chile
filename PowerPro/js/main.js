jQuery(window).ready(function($){
	if ($('#slider').length>0){
        $('#slider img').eq(0).addClass('active').css({'opacity': 1, 'z-index': 5});
        $('#control li').removeClass('current').eq(0).addClass('current');
		slideOn();
        $('#control ul').on('click', 'li:not(.current) a', function (e) {
			e.preventDefault();
			var target = $(this).attr('href').split('#')[1];
			changeOnClick(target);
		});
	}
});

var time = setInterval(changeSlider, 5000);
var slideOn = function(clear){
	if (typeof clear === "undefined" || clear === null) { 
		clear = false; 
	}
	var animationTime = 1000;
	var timeToChange = 5000;
	
	if (clear==true){
		clearInterval(time);
		time = 0;
		time = setInterval(changeSlider, parseInt(animationTime+timeToChange));
	}else{
		time = setInterval(changeSlider, parseInt(animationTime+timeToChange));
	}	
}

var slideOff = function(){
	clearInterval(time);
}

var changeSlider = function(itemID){
	if (typeof itemID === "undefined" || itemID === null) { 
		itemID = false; 
	}
	var animationTime = 1000;
	
	var $slider = $('#slider');
	var $slider_items = $slider.find('img');
	var cantidad = $slider_items.length;
	if ($slider.find('.active').length<1){
		$slider_items.eq(0).addClass('active').css({'opacity':1, 'z-index':5});
	}

	if (itemID==false){
		if ($slider.find('.active').index()+1==cantidad){
			$slider_items.eq(0).css('z-index', 5).animate({opacity:1}, animationTime);
			ctrlsRefresh($slider_items.eq(0).attr('id'));
			$slider.find('.active').removeClass('active').css('z-index', 4).animate({opacity:0}, animationTime, function(){
				$slider_items.eq(0).addClass('active');
			});
		} else {
			$slider.find('.active').next().css('z-index', 5).animate({opacity:1}, animationTime);
			ctrlsRefresh($slider.find('.active').next().attr('id'));
			$slider.find('.active').removeClass('active').css('z-index', 4).animate({opacity:0}, animationTime, function(){
				$(this).next().addClass('active');
			});
		}
	}else{        
		var $thisEle = $slider.find('#'+itemID);
        $thisEle.stop().css('z-index', 5).animate({opacity:1}, animationTime);
        ctrlsRefresh($thisEle.attr('id'));
        $slider.find('.active').removeClass('active').css('z-index', 4).stop().animate({opacity:0}, animationTime);
        $thisEle.addClass('active');
	}
}

var changeOnClick = function(item){
	changeSlider(item);
	slideOn(true);
}

var ctrlsRefresh = function(itemVisible){
	var id = itemVisible;
	var $ctrls = $('#control');
	
	$ctrls.find('li').removeClass('current').find('a[href="#'+id+'"]').parent().addClass('current');
}