$(document).ready(function(){
    var contador=0;
    $('input,textarea').keypress(function(e){
        contador++;
        if (contador==1) {
            $(this).parent().addClass('have');
        }
    });
    $('input,textarea').focus(function(){
        contador=0;
    });
    $('input,textarea').focusout(function(){
        if ($(this).val()=="") {
            $(this).parent().removeClass('have');
        }
    });
    $('input,textarea').each(function(){
        if ($(this).val()!="") {
            $(this).parent().addClass('have');
        }
    });
});