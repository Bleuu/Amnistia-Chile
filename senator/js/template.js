$(document).ready(function(){
    $('template').each(function(){
        var url = $(this).data('url');
        var ref = $(this).data('ref');
        var $this = $(this);
        $.ajax({
            url:url,
            success:function(result){
                var $ele = $($.parseHTML(result));
                $this.after($ele);
                $this.before('<!-- Inicio '+ref+' -->');
                $this.remove();
                $ele.attr('data-template-ref', ref).after('<!-- Fin '+ref+' -->');
            },
            error:function(error){
                alert('error');
            }
        });
    });
});