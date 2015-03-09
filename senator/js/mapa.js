$(document).ready(function(){
    $('#mapa #mapa_continentes > div').mouseenter(function(){
        var clase = $(this).attr('class');
        $(this).parent().toggleClass(clase);
    }).mouseleave(function(){
        $(this).parent().attr('class','');
    }).click(function(){
        var continent =$(this).data('number');
        var currentClass =$(this).attr('class');
        $.ajax({
            type: 'POST',
            url: '/agents/get_countries_by_continent/'+continent,
            success: function(html){
                $('.data-mapa').html(html);
                $('.data-mapa').fadeIn(200).find('#continentes').removeAttr('class').addClass('img_'+currentClass);
                //console.log(msg);
            }
        }); 
    });
    
    $(document.body).on('change', '#paises', function(){
        var pais=$(this).val();
        if (pais!="") {
            $.ajax({
                type: 'POST',
                url: '/agents/get_agents_and_offices_by_country/'+pais,
                beforeSend: function(){
                    $('.loading').show();
                },
                success: function(html){
                    $('.loading').hide();
                    $('.mapa_ofic').html(html);
                }
            });
        }else{
            $('.mapa_ofic').html('');
        }
    });
    
    $('.data-mapa').on('click', '.close', function(){
        $(this).parents('.data-mapa').fadeOut(200);
    });
});