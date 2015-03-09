<?php define('PAGE_TITLE', 'Contactanos | Power Pro'); ?>
<?php include('header.php')?>
<section>
    <div class="wrap">
        <div class="content">
            <div class="banner">
                <img src="assets/agricola.png" alt="Banner">
            </div>
            <div class="inside">
                <div class="box_padding">
                    <div class="bcrumb">
                        <p><a href="index.php" title="home">inicio</a> &#62; Contacto</p>
                    </div>
                    <h1 class="small">Contacto</h1>
                    <form class="clbth">
                      <h2>Información de Contacto</h2>
                        <div class="msg_form error">
                            <span class="icon"></span>
                            <p><strong>¡Error! </strong>Su mensaje no ha sido enviado.</p>
                        </div>
                        <div class="msg_form success">
                            <span class="icon"></span>
                            <p>Su mensaje ha sido enviado exitosamente.</p>
                        </div>
                       <div class="left">
                            <div class="line">
                                <label>Nombre:<span>*</span></label>
                                <input type="text" placeholder="Nombre" class="form-error">
                            </div>
                            <div class="line">
                                <label>Correo electrónico:<span>*</span></label>
                                <input type="email" placeholder="usuario@dominio.com">
                            </div>
                            <div class="line">
                                <label>Telefono:<span>*</span></label>
                                <input type="tel" placeholder="56847845">
                            </div>
                            <div class="line">
                                <label>Ciudad:<span>*</span></label>
                                <input type="text" placeholder="Santiago">
                            </div>
                            <div class="line big">
                               <label>Comentarios:<span>* </span></label>
                                <textarea class="form-error"></textarea>
                            </div>
                        </div>
                        <div class="right clbth">
                            <p>Código de seguridad</p>
                            <p>Ingrese palabra bajo la imagen</p>
                            <div class="con_capt">
                                <div class="captcha"></div>
                                <a href="#" title="refrescar" class="update"></a>
                            </div>
                            <div class="line">
                                <input type="text">
                                <span>*</span>
                            </div>
                            <div class="send">
                                <p>Campos Requeridos *</p>
                                <input type="submit" value="Enviar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php')?>