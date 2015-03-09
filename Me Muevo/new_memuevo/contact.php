<?php include('header.php'); ?>
<section class="somos">
    <div class="wrapper">
        <div class="bread">
            <p>Estas en : <a href="index.php" title="Inicio">Inicio</a> > <span>Quienes Somos</span></p>
        </div>
        <div class="slide">
            <ul class="bxslider">
                <li><img id="banner_item_1" src="img/sidebar.png" alt="BBANNER-GENERACION" class="img_ban"></li>
            </ul>
        </div>
        <div class="content">
            <h2>The European languages are members of the same family. Their separate existence is a myth.</h2>
            <div class="txt_here">
                <p>
                    The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.
                </p>
            </div>
            <form>
                <div class="line">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name">
                </div>
                <div class="line">
                    <label for="mail">Correo Electronico:</label>
                    <input type="email" id="mail" class="wpcf7-not-valid">
                    <span class="wpcf7-not-valid-tip">Campo incompleto</span>
                </div>
                <div class="line large">
                    <label for="subject">Mensaje:</label>
                    <textarea name="mensaje" id="subject" class="wpcf7-not-valid">
                    </textarea>
                    <span class="wpcf7-not-valid-tip">Campo incompleto</span>
                </div>
                <div class="line">
                    <input type="submit" value="Enviar Mensaje" class="more">
                </div>
            </form>
<!--            <div class="wpcf7-response-output wpcf7-mail-sent-ok" role="alert">Mensaje enviado con éxito.</div></div>-->
            <div class="wpcf7-response-output wpcf7-validation-errors" role="alert">Ocurrió un error de validación.</div></div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>          

</div>