<?php
if(!is_home()){
    echo $_SESSION['data-banners'][1];
}
?>
<div class="sidebar_box follow">
    <div class="side_banner"></div>
    <div class="label_y">
        <span class="label_left"></span>Mantente Conectado<span class="label_right"></span>
    </div>
    <div class="like_fb">
        <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FAmnist%25C3%25ADa-Internacional-Chile%2F126170624336%3Ffref%3Dts&amp;width=200&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:80px;" allowTransparency="true"></iframe>
    </div><!--like_fb-->
    <div class="follow_tw">
        <a href="https://twitter.com/amnistiachile" class="twitter-follow-button" data-show-count="false" data-lang="es">Seguir a @amnistiachile</a>
    </div>
    <div class="youtube_subs">
        <script src="https://apis.google.com/js/platform.js"></script>
        <div class="g-ytsubscribe" data-channel="aichile1" data-layout="default" data-count="undefined"></div>
    </div>
</div>
<?php if (is_home()) { ?> 
<div class="sidebar_box twitter">
    <div class="side_banner"></div>
    <div class="label_y">
        <span class="label_left"></span>Twitter<span class="label_right"></span>
    </div>
    <a class="twitter-timeline" href="https://twitter.com/amnistiachile" data-widget-id="568118886693105664">Tweets por @amnistiachile.</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
<?php }else{ ?>
<div class="sidebar_box quick_donate">
    <div class="side_banner"></div>
    <div class="label_y">
        <span class="label_left"></span>Haz una donación<span class="label_right"></span>
    </div>
    <p class="text_donate">“Con tu colaboración podemos seguir trabajando por los DDHH”.</p>
    <div class="line">
        <a href="https://www.webpay.cl/portalpagodirecto/pages/institucion.jsf?idEstablecimiento=1934788" title="Dona lo que puedas." target="_blank" class="btn_donar btn btn_sec">
            DONAR <span class="icon_donar"></span>
        </a>
    </div>
    <div class="donate_webpay">
        <a href="https://www.webpay.cl/portalpagodirecto/pages/institucion.jsf?idEstablecimiento=1934788" title="Dona lo que puedas." target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/webpay.png" alt="WebPay" >
        </a>
    </div>
</div>
<?php } ?> <!--Endif home-->
