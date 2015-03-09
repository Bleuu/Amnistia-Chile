<section id="contacto">
    <div class="dark">
        <div class="tri"></div>
    </div>
    <div class="texture"></div>
    <div class="wrap">
        <div class="dts_contact">
            <h2>Contacto</h2>
            <div class="datos">
                <div class="img_dt"></div>
                <div class="mail">
                    <a href="mailto:info@didigital.cl"><p>info@didigital.cl</p></a>
                </div>
            </div>
            <div class="datos">
                <div class="img_dt" id="phone"></div>
                <p>
                    <a href="tel:+5622235659">+56 2 2235 26 59</a>
                </p>
            </div>
            <div class="datos">
                <div class="img_dt" id="adress"></div>
                <p>
                    <a href="https://www.google.cl/maps/place/Huelen+164,+Providencia,+Regi%C3%B3n+Metropolitana/@-33.4323134,-70.6223397,17z/data=!3m1!4b1!4m2!3m1!1s0x9662c587822b6e89:0x3aee7e46512ef527" target="_blank">Huelen 164, Piso 2, Providencia, Santiago de Chile.</a>
                </p>
            </div>
            <div class="map" id="map"></div>
        </div>

        <?php
if (isset($_GET['mail'])){
    echo '<div id="contacto_return">';
    require_once(BASE.'sendmail.php');
    echo '</div>';
}
        ?>
        <div class="form">
            <form action="?mail#contacto" method="post" data-target="sendmail" class="frm">
                <div class="line required">
                    <label for="contact[name]" class="special"></label>
                    <input type="text" placeholder="Ej.: Jaime Medina" id="contact[name]" name="Nombre_contacto" value="<?php echo @$_POST['Nombre_contacto']; ?>">
                </div>
                <div class="line required email">
                    <label for="contact[mail]" class="special mail "></label>
                    <input placeholder="Ej.: nombre@dominio.cl" type="email" id="contact[mail]" name="Correo_contacto" value="<?php echo @$_POST['Correo_contacto']; ?>">
                </div>
                <div class="line">
                    <label for="contact[phone]" class="special phone"></label>
                    <input type="tel" id="contact[phone]" placeholder="Ej.: 222352659" name="Telefono_contacto" value="<?php echo @$_POST['Telefono_contacto']; ?>">
                </div>
                <div class="line multi required">
                    <label for="contact[text]" class="special text"></label>
                    <textarea name="Mensaje_contacto" id="contact[text]"><?php echo @$_POST['Mensaje_contacto']; ?></textarea>
                </div>
                <div class="line capt required">
                    <!-- captcha -->
                    <?php require_once(BASE.'captcha.php');?>
                </div>
                <div class="line_send">
                    <p id="feed_msg"></p> 
                    <input type="submit" value="Enviar" class="send"> 
                </div>
                <p class="ob">*Todos los campos son obligatorios.</p>
            </form>
        </div>
    </div>
</section>