function loadScript(url, callback) {
    var script = document.createElement("script")
    script.type = "text/javascript";

    if (script.readyState) { //IE
        script.onreadystatechange = function () {
            if (script.readyState == "loaded" || script.readyState == "complete") {
                script.onreadystatechange = null;
                callback();
            }
        };
    } else { //Others
        script.onload = function () {
            callback();
        };
    } 
    script.src = url;
    document.getElementsByTagName("head")[0].appendChild(script);
}
function loadExternalUrl(){
    $.get( "/layout-tracking.html", function( indexData ) {
        if (indexData.indexOf("{{contenido}}")>=0) {
            $.get(window.location.pathname, function( current ) {
                var newContent = indexData.replace('{{contenido}}', current);
                var newContent = newContent.replace('<script src="/js/transfer-tracking.js"></script>', "");
                $('body').html(newContent);
            });
        }            
    });
}
loadScript("/js/jquery-1.11.1.min.js", function () {
    $('document').ready(function(){
        var contador=0;
        if (window.location.pathname!="/") {
            loadExternalUrl();
        }
    });
});	