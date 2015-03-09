<footer>
    <div class="wrapper">
        <h2><a href="<?php echo bloginfo('url')?>" title="Fundación Me Muevo"><img src="<?php bloginfo('template_url')?>/img/logo.png" alt="Me Muevo" class="logo"></a></h2>
        <div class="datos">
            <p><strong>&copy; Fundación Me Muevo 2014</strong></p>
            <p>RUT: 65.088.095-1</p>
            <p>Fono/Skype: <a href="tel:<?php echo get_option('memuevo_info_telefono'); ?>" title="Llamar"><?php echo get_option('memuevo_info_telefono'); ?></a></p>
            <p><?php echo get_option('memuevo_info_direccion'); ?></p>
            <p><a href="mailto:<?php echo get_option('memuevo_info_correo'); ?>" title="Enviar correo"><?php echo get_option('memuevo_info_correo'); ?></a></p>
        </div>
        <nav>
            <a href="<?php bloginfo('url')?>" title="Inicio">Inicio</a>
            <a href="<?php echo get_post_type_archive_link('articulos'); ?>" title="Articulos">Artículos</a>
            <a href="<?php echo get_post_type_archive_link('prensa'); ?>" title="Prensa">Prensa</a>
            <a href="<?php bloginfo('url')?>/quienes-somos" title="Quienes Somos">Quiénes Somos</a>
            <a href="<?php bloginfo('url')?>/areas-de-trabajo" title="Areas de trabajo">Áreas de trabajo</a>
            <a href="<?php bloginfo('url')?>/artritis-chile" title="Artritis Chile">Artritis Chile</a>
            <a href="<?php bloginfo('url')?>/contacto" title="Contacto">Contacto</a>
        </nav>
        <?php get_template_part('redes','sociales');?>
        <div class="support">
            Apoyado por <a href="http://fullxhosting.cl/" title="Fullxhosting" target="_blank">Fullxhosting</a>, <a href="http://www.didigital.cl" title="Agencia Digital - diDigital" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/didigital-logo2.png" alt="diDigital"></a> y <a href="http://www.oxus.cl" title="Ingeniería y Desarrollo - OXUS" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/oxus-logo2.png" alt="OXUS"></a>
        </div>
    </div>
</footer>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<?php wp_footer(); ?>
</body>
</html>

<?php
/*
El get_option es una propiedad del pro panel que lo que hace es agrega funciones a Apariencia->Site Options
*/
?>