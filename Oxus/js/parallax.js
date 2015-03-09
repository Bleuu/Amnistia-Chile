// The plugin code thx to http://codepen.io/michaelalmeida/pen/gmqob
(function($){
    $.fn.parallax = function(options){
        var $this = $(this);
        offset = $this.offset();
        var defaults = {
            "start": 0,
            "stop": offset.top + $this.height(),
            "coeff": 0.95
        };
        var opts = $.extend(defaults, options);
        return this.each(function(){
            $(window).bind('scroll', function() {
                windowTop = $(window).scrollTop();
                if((windowTop >= opts.start) && (windowTop <= opts.stop)) {
                    newCoord = windowTop * opts.coeff;
                    $this.css({
                        "background-position": "0 "+ newCoord + "px"
                    });
                }
            });
        });
    };
})(jQuery);