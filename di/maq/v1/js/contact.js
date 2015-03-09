jQuery(document).ready(function(){
    setContactEmail();
});

var successMsg = '¡Enviado! Pronto nos comunicaremos contigo.';
var warningMsg = 'Revisa los campos marcados en rojo.';
var alertMsg = 'Ya enviado. Gracias.';

var setContactEmail = function(){
    var target = $('#contacto');
    var sentData = '';

    target.find('form').submit(function(e){
        e.preventDefault();


        $('.msg').removeClass('msg');
        var send = true;

        $(this).find('.required').removeClass('error').each(function(){
            var input = $(this).find(':input');
            $(this).find('.error-msg').remove();
            
            var temp = input.val() != ''; //Solo compruebo que el valor no esté vacío
            
            if (!temp){
                $(this).addClass('error');
                errorMsg($(this), 'empty');
            }
            
            //Compruebo si existe campo correo...
            if (temp && (input.hasClass('email') || input.attr('type')=='email')) {
                if ( !IsEmail(input.val()) ){ //Compruebo que el valor sea un formato de correo válido
                    $(this).addClass('error format_error');
                    errorMsg($(this), 'email_format');
                    temp = false;
                }
            }
            
            if (temp && send && target.find('.capt input:checked').length<1){
                temp = false;
                warningMsg = 'Selecciona la imagen que corresponda.'
            }

            if (!temp && send) send = false;
        });

        if (send){
            target.find('[type="submit"]').addClass('disabled').prop('disabled', 'disabled');
            target.find('form #feed_msg').addClass('info').removeClass('msg suc').html('Enviando...');
            var dataToSend = $(this).serialize();
            if (sentData == dataToSend){
                target.find('form #feed_msg').addClass('msg').removeClass('info suc').html(alertMsg);
                $('html, body').animate({scrollTop:target.position().top-20}, 'slow');
                target.find('input[type="submit"]').removeClass('disabled').removeAttr('disabled');
                return false;
            }	    

		var dataSplited = dataToSend.split('&');
		var search = new RegExp('Captcha=' , "gi");		
		jQuery.grep(dataSplited, function (t, v) {if(search.test(t))dataSplited.splice(v, 1);});
		sentData = dataSplited.join('&');
	
            $.ajax({
                'url': $(this).data('target')+'.php',
                'type': $(this).attr('method'),
                'data': dataToSend,
                'success': function(resp){
                    resp = $.parseJSON(resp);
                    if (!resp.ok) {
                        target.find('form #feed_msg').addClass('msg').removeClass('info suc').html(resp.msg);
                    } else {
                        target.find('form #feed_msg').addClass('suc').removeClass('msg msg').html(successMsg);
                        $('html, body').animate({scrollTop:target.position().top-20}, 'slow');
                    }
                    target.find('.line.capt').addClass('info').removeClass('msg suc').html('Refrescando captcha...');
                    target.find('.line.capt').load('captcha.php');
                    target.find('input[type="submit"]').removeClass('disabled').removeAttr('disabled');
                },
                'error':function(a,b,c){
                    console.log(a);
                    console.log(b);
                    console.log(c);
                }
            });
        } else {
            target.find('form .error:first :input').focus();
            target.find('form #feed_msg').addClass('msg').removeClass('info suc').html(warningMsg);
            $('html, body').animate({scrollTop:target.position().top-20}, 'slow');
        }
        return true;
    });
}

function IsEmail(email_val) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email_val);
}

var errorMsg = function(ele, type){
    var msg = '';
//    if (type=='empty') msg = 'Debe completar este campo';   
    if (type=='empty') msg = '';
    if (type=='email_format') msg = 'Formato de correo inválido';

//    $(ele).append('<span class="error-msg">'+msg+'</span>');
}
