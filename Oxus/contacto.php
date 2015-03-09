<section id="contacto">
    <div id="map"></div>
    <div class="wrapper">
        <?php
        if (isset($_GET['mail'])){
            echo '<div id="contacto_return">';
            require_once(BASE.'sendmail.php');
            echo '</div>';
        }
        ?>
        <form action="index.php?mail#contacto" method="post" data-target="sendmail" class="frm">
            <div class="contenido">
                <h2 class="tit">Contáctanos</h2>
                <p><span class="icon"></span>Huelen 164, Piso 2, Providencia, Santiago</p>
                <p class="second"><span class="icon tel"></span>(+56 2) 2 235 2659</p>
                <div class="line required">
                    <label for="contact[name]">Nombre (*):</label>
                    <input type="text" placeholder="Ej.: Arturo Prat" id="contact[name]" name="Nombre_contacto" value="<?php echo @$_POST['Nombre_contacto']; ?>" class="npt">
                </div>
                <div class="line">
                    <div class="half_line required">
                        <label for="contact[mail]">Correo (*):</label>
                        <input class="email npt" placeholder="Ej.: nombre@dominio.cl" type="email" id="contact[mail]" name="Correo_contacto" value="<?php echo @$_POST['Correo_contacto']; ?>">
                    </div>
                    <div class="half_line required">
                        <label for="contact[phone]">Teléfono (*):</label>
                        <input type="tel" id="contact[phone]" placeholder="Ej.: 22652659" name="Telefono_contacto" value="<?php echo @$_POST['Telefono_contacto']; ?>" class="npt">
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="line required">
                    <label for="contact[text]">Mensaje o Consulta (*):</label>
                    <textarea name="Mensaje_contacto" id="contact[text]" class="npt"><?php echo @$_POST['Mensaje_contacto']; ?></textarea>
                </div>
                <div class="line capt">
                    <!-- captcha -->
                    <?php require_once(BASE.'captcha.php');?>
                </div>
                <div class="line submit">
                    <p id="feed_msg"></p>
                    <input type="submit" value="Enviar">
                    <span class="oblig">(*) Campos obligatorios</span>
                </div>
            </div>
        </form>
    </div>
</section>