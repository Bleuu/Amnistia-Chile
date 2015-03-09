<?php
    $page = 'home';
    include('header.php');
?>
<div class="container banner">
    <div class="wrap">
        <img src="#" alt="" />
    </div>
</div>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <div class="content_box wysiwyg">
                <h1>¡Juntos somos más fuertes!</h1>
                <p>La <strong>Libertad de Amnistía Internacional para defender los derechos humanos está garanzitazada porque no depende de condicionamientos que puedan imponerle gobiernos u otros grandes donantes.</strong>Amnistía Internacional actúa y se pronuncia con libertad a favor de los derechos humanos en el mundo por el aporte individual de sus socios/as. <strong>¡Es una fortaleza que no debe perderse!</strong></p>
                <br>
                <h6>¿Qué es un/a socio/a?</h6>
                <p>Ser socio de Amnistía Internacional es garantizar la independencia e imparcialidad del movimiento. Gracias a las donaciones solidarias de nuestros miembros velamos por los Derechos Humanos en el Perú y el mundo.</p>
                <p>Además puedes participar en la toma de decisiones del movimiento y ejercer tu voto en nuestra Asamblea General. Tendrás acceso a toda la información, al material de consulta y serás siempre bienvenido a las acciones de calle.</p>
            </div>
            <form action="" method="post">
                <section class="second">
                    <div class="section_banner"></div>
                    <div class="label_second">
                        <span class=label_left></span>1. Contribuye a garantizar nuestra independencia<span class=label_right></span>
                    </div>
                    <div class="contactForm inlineForm">
                        <div class="line">
                            <div class="thirdLine_plus">
                                <label>Tu donación:</label>
                                <input type="radio" name="hola3" data-label="2.000" value="">
                                <input type="radio" name="hola3" data-label="5.000" value="">
                                <input type="radio" name="hola3" data-label="10.000" value="">
                                <input type="radio" name="hola3" data-label="50.000" value="">
                            </div>
                            <div class="thirdLine">
                                <label>Otro monto:</label>
                                <input class="right" type="number" placeholder="ej: 40.000">
                            </div>
                        </div>
                        <div class="line">
                            <label>Realizar esta donación:</label>
                            <input type="radio" name="hola3" data-label="Una sola vez (Donacion Puntual)" value="">
                            <input type="radio" name="hola3" data-label="Cada Mes (Asociarme)" value="">
                        </div>
                        <div class="line">
                            <p><em>* Para ser socio/a de Ammnistía Internacional realiza una donación puntual mínima de 10.000 pesos o una donación mensual mínima de 2.000 pesos.</em></p>
                        </div>
                    </div>
                </section>
                <section class="second">
                    <div class="section_banner"></div>
                    <div class="label_second">
                        <span class=label_left></span>2. Tus datos<span class=label_right></span>
                    </div>
                    <div class="contactForm">
                        <div class="line">
                            <div class="halfLine">
                                <label>Nombre:</label>
                                <input type="text" placeholder="ej: Juan">
                            </div>
                            <div class="halfLine">
                                <label>Apellidos:</label>
                                <input type="text" placeholder="ej: Pérez">
                            </div>
                        </div>
                        <div class="line">
                            <div class="halfLine">
                                <label>Correo electrónico:</label>
                                <input type="email" placeholder="ej: minombre@chile.cl">
                            </div>
                            <div class="halfLine">
                                <label>Fecha de nacimiento:</label>
                                <input type="datetime" id="datepicker">
                            </div>
                        </div>
                        <div class="line">
                            <div class="halfLine">
                                <label>Teléfono Celular:</label>
                                <input type="tel" placeholder="ej: 12345678">
                            </div>
                            <div class="halfLine">
                                <label>Otro Teléfono:</label>
                                <input type="tel" placeholder="ej: 12345678" class="error">
                            </div>
                        </div>
                        <div class="line">
                            <div class="halfLine">
                                <label>Ocupación:</label>
                                <select>
                                    <option>opción 1</option>
                                    <option>opción 2</option>
                                </select>
                            </div>
                            <div class="halfLine">
                                <label>Lugar de Trabajo o Estudios:</label>
                                <input type="text" placeholder="ej: Oficina">
                            </div>
                        </div>
                        <div class="line">
                            <div class="halfLine">
                                <label>Pais:</label>
                                <input type="text" placeholder="ej: Chile">
                            </div>
                            <div class="halfLine">
                                <label>Ciudad:</label>
                                <input type="text" placeholder="ej: Santiago">
                            </div>
                        </div>
                        <div class="line">
                            <label>Correo electrónico:</label>
                            <input type="text" placeholder="ej: suscribirme@amnistia.cl">
                        </div>
                        <div class="line">
                            <label>Dirección:</label>
                            <input type="text" placeholder="ej: Av. Alameda 562">
                        </div>
                        <div class="line">
                            <div class="halfLine">
                                <input type="checkbox" name="agree" data-label="" value="">
                                <p class="for_checkbox">Estoy de acuerdo con los <a href="" title="">Estatutos de Amnistía Internacional Chile y las Términos y condiciones</a> de Amnistía Internacional Chile</p>
                            </div>
                            <div class="halfLine">
                                <input type="checkbox" name="subscripcion" data-label="" value="">
                                <p class="for_checkbox">Me gustaría suscribirme a los boletines de Amnistía Internacional</p>
                            </div>
                        </div>
                        <div class="line margin_sumbit">
                            <input type="submit" value="DONAR" class="btn btn_pri center">
                        </div>
                    </div>
                </section>
            </form>
        </div><!--main-->
        <aside>
            <div class="sidebar_box fullphoto">
                <div class="side_banner"></div>
                <div class="label_y">
                    <span class="label_left"></span>Involúcrate<span class="label_right"></span>
                </div>
                <div class="img_fp">
                    <img src="assets/amnis_poster2.jpg" alt="" />
                </div>
                <div class="content_fp">
                    <p class="title_fp">
                        <span>¡Muchas</span>
                        <span class="big">Gracias!</span>
                    </p>
                    <div class="text_fp">
                        <p class="text_special">Gracias por elegir donar en favor de la dignidad, la libertad y la justicia.</p> 
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
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