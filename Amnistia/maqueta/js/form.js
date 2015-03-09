$(document).ready(function() {
//ARREGLOS DE CSS
    //arreglos para campos de formulario
    $('.line').each(function() {
        if($(this).children('.halfLine').length>1) {
            $(this).children('.halfLine:last').css('float','right');
        }    
    });
    $('.line').each(function() {
        if($(this).children('.thirdLine').length>1) {
            $(this).children('.thirdLine:last').css({'margin-right':'0','float':'right'});
        }
    });
    $('.line').each(function() {
        if($(this).children('.quarterLine').length>1) {
            $(this).children('.quarterLine:last').css({'margin-right':'0','float':'right'});
        }
    });
    $('.inlineForm input, .inlineForm textarea').each(function() {
        var lineWidth = parseFloat($(this).parent('div').width());
        var labelWidth = parseFloat($(this).prev('label').width());
        var inputWidth = lineWidth-labelWidth-10;
        $(this).css('width',inputWidth);
    });
    //insertar burbuja de error
    $('.error').each(function() {
        $(this).prepend('<div class="errorBubble" />');
        
        $(this).mouseenter(function() {
            $(this).find('.errorBubble').fadeOut(500);
        });
    });
    
//CHECKBOX
    $('input[type="checkbox"]').each(function() {
        if($(this).attr('checked')) {
            var estadoCheck = 'check';
        } else {
            var estadoCheck = '';
        }
        var label = $(this).data('label');
        $(this).hide();
        $(this).wrap('<div class="checkboxLine" />');
        $(this).parent('.checkboxLine').append('<div class="checkbox '+estadoCheck+'" for="'+label+'" onclick=$(this).toggleClass("check");></div>'+label);
    });
    $('.checkbox').click(function() {
        var label = $(this).attr('for');
        if($(this).prev('input[data-label='+label+']').attr('checked')) {
            $(this).prev('input[data-label='+label+']').removeAttr('checked');
            $(this).parent('.checkboxLine').parent('td').parent('tr').children('td').removeClass('active');
        } else {
            $(this).prev('input[data-label='+label+']').attr('checked','checked');
            $(this).parent('.checkboxLine').parent('td').parent('tr').children('td').addClass('active');
        }
    });

//RADIO
    $('input[type="radio"]').each(function(e) {
        if($(this).attr('checked')) {
            var estadoCheck = 'radioCheck';
        } else {
            var estadoCheck = '';
        }
        var label = $(this).data('label');
        $(this).wrap('<div class="radioLine" />');
        $(this).parent('.radioLine').append('<div class="radio '+estadoCheck+'" for="'+label+'"></div>'+label);
        $(this).hide();
    });
    $('.radio').click(function() {
        var label = $(this).attr('for');
        var name = $(this).prev('input').attr('name');
        if($(this).prev('input').not(':checked')) {
            $('input[name='+name+']').removeAttr('checked');
            $('input[name='+name+']').next('.radio').removeClass('radioCheck');
            $(this).prev('input[data-label='+label+']').attr('checked','checked');
            $(this).addClass('radioCheck');
        }
    });    
});