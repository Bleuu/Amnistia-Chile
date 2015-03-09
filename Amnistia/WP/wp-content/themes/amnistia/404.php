<?php
    include('header.php');
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <div class="breadcrumb">
                <a href="#" title="" >Inicio</a> &#9658; Error
            </div>
            <div class="wysiwyg">
                <h1 class="title">Lo sentimos,<br>la página no se encuentra disponible</h1>
                <p>¡Pero no te rindas en la lucha!</p>
                <br>
                <h6>Prueba con una nueva búsqueda:</h6>
                <form>
                    <div class="error_search">
                        <input type="text">
                        <input type="submit" value="">
                    </div>
                </form>
                <h6>O explora nuestro sitio:</h6>
                <ul>
                    <li>Visita nuestro <a href="index.php" title="Inicio">inicio</a>.</li>
                    <li>Lee acerca de <a href="landing.php" title="Nuestro Trabajo">nuestro trabajo</a>.</li>
                    <li>Informate de como <a href="actua.php" title="Actua">involucrarte más</a> en la lucha por los derechos humanos.</li>
                </ul>
            </div>
        </div><!--main-->
        <aside>
            <div class="sidebar_box fullphoto">
                <div class="side_banner"></div>
                <div class="label_y">
                    <span class="label_left"></span>Nuestro Trabajo<span class="label_right"></span>
                </div>
                <div class="img_fp">
                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/12/home-h3-trabajo-bg.png" alt="Asociate" />
                </div>
                <div class="content_fp">
                    <div class="title_fp"><span>¡Muchas</span><span class="big">Gracias!</span></div>
                    <div class="text_fp">
                        <p class="text_special">Gracias por elegir donar en favor de la dignidad, la libertad y la justicia.</p> 
                    </div>
                </div>
            </div>
            <div class="sidebar_box contact">
                <div class="side_banner"></div>
                <div class="label_y">
                    <span class="label_left"></span>¿Necesitas ayuda?<span class="label_right"></span>
                </div>
                <div class="contact_box">
                    <p class="text">Con todo gusto nos pondremos en contacto contigo para orientarte y brindarte información paso a paso.</p>
                    <div class="contact_method">
                        <span class="icon_contact phone"></span>
                        <p class="info_contact">
                            <strong>Llámanos a</strong>
                            447 1360 <br>
                            989 205 075 (RPC)
                        </p>
                    </div>
                    <div class="contact_method">
                        <span class="icon_contact mail"></span>
                        <p class="info_contact">
                            <strong>Escribenos a</strong>
                            unete@amnistia.org.pe
                        </p>
                    </div>
                    <div class="contact_method">
                        <span class="icon_contact skype"></span>
                        <p class="info_contact">
                            <strong>Llamanos Skype</strong>
                            unete amnistia
                        </p>
                    </div>
                </div>
            </div>
        </aside>
    </div><!--wrap-->
</div><!--content-->
<?php
    include('footer.php');
?>