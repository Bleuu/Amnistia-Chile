<?php include('header.php'); ?>   
<!--CONTENIDO-->  
<div id="contenido" class="">
    <div id="ruta">
        <p>Usted está en: <a href="#" title="Ir a Inicio">Inicio</a> / <a href="#" title="Ir a Noticias">Noticias</a></p>
    </div>
    <div id="principal"  class="dos">
        <h1>Otras Noticias</h1>
        <div class="recientes">
            <div class="bloqueVertical">
                <div>
                    <div class="news_date">18.09.2013</div>
                    <a href="noticia.php" title="SERF y nuevas formas de aprender en el GAM">SERF y nuevas formas de aprender en el GAM</a>
                </div>
            </div>
            <div class="bloqueVertical">
                <div>
                    <div class="news_date">18.09.2013</div>
                    <a href="noticia.php" title="Ganadores del FIE compartieron experiencias de mejora en el contexto escolar">Ganadores del FIE compartieron experiencias de mejora en el contexto escolar</a>
                </div>
            </div>
            <div class="bloqueVertical">
                <div>
                    <div class="news_date">18.09.2013</div>
                    <a href="noticia.php" title="Profesionales reflexionan en el “saber compartido” a un año de la implementación de SERF">Profesionales reflexionan en el “saber compartido” a un año de la implementación de SERF</a>						
                </div>
            </div>  
            <div class="bloqueVertical">
                <div>
                    <div class="news_date">18.09.2013</div>
                    <a href="noticia.php">Estudiantes de Antofagasta lograron llegar a la Antártica</a>
                </div>
            </div>
            <div class="bloqueVertical">
                <div>
                    <div class="news_date">18.09.2013</div>
                    <a href="noticia.php" title="IAPB despide una nueva generación de estudiantes">IAPB despide una nueva generación de estudiantes</a>
                </div>
            </div>
            <div class="bloqueVertical">
                <div>
                    <div class="news_date">18.09.2013</div>
                    <a href="noticia.php" title="Al rescate de “buenas prácticas” directivas en Educación">Al rescate de “buenas prácticas” directivas en Educación</a>
                </div>
            </div>
            <div class="bloqueVertical">
                <div>
                    <div class="news_date">18.09.2013</div>
                    <a href="noticia.php">Los libros se toman la sala de clases del IAPB</a>
                </div>
            </div>
            <div class="bloqueVertical">
                <div>
                    <div class="news_date">18.09.2013</div>
                    <a href="noticia.php/" title="Todos al Teatro estrena “La Cantante Calva” ">Todos al Teatro estrena “La Cantante Calva” </a>
                </div>
            </div>
            <div class="bloqueVertical">
                <div>
                    <div class="news_date">18.09.2013</div>
                    <a href="noticia.php" title="Paola Luksic constató avances de proyectos en Antofagasta">Paola Luksic constató avances de proyectos en Antofagasta</a>
                </div>
            </div>
        </div><!--recientes-->
        <div class="paging">
            <span class="disabled">&lt; Anterior</span> | 
            <span class="current">1</span> | 
            <span><a href="/news/news/index/../../../noticias/page:2">2</a></span> | 
            <span><a href="/news/news/index/../../../noticias/page:3">3</a></span> | 
            <span><a href="/news/news/index/../../../noticias/page:4">4</a></span> | 
            <span><a href="/news/news/index/../../../noticias/page:5">5</a></span> | 
            <span><a href="/news/news/index/../../../noticias/page:6">6</a></span> | 
            <span><a href="/news/news/index/../../../noticias/page:7">7</a></span> | 
            <span><a href="/news/news/index/../../../noticias/page:8">8</a></span> | 
            <span><a href="/news/news/index/../../../noticias/page:9">9</a></span>	
            <span><a href="/news/news/index/../../../noticias/page:2" class="next">Siguiente &gt;</a></span>
        </div>
    </div> <!-- #principal -->
</div><!--FIN CONTENIDO-->

<div class="container_mail lightbox_own">
    <div class="label_mail">
        <img src="img/layout/letter.fw.png" alt="Letter">
        <h2>Enviar por mail</h2>
        <span class="close_lb" style="cursor:pointer;"></span>
    </div>
    <div class="content_lightbox">
        <div class="flashMsg exito">
            <div>Se ha enviado el correo a tu amigo</div>
        </div>
        <div class="flashMsg wrong">
            <div>Ha ocurrido un error. Inténtalo de nuevo</div>
        </div>
        <div class="contact_form_mail">
            <form action="" method="post">
                <div class="inline_mail">
                    <div class="one_line">
                        <div class="half_line fail">
                            <label>Nombre:</label>
                            <input type="text" placeholder="Martin">
                        </div>
                        <div class="half_line">
                            <label>Su E-Mail:</label>
                            <input type="email" placeholder="usuario@dominio.com">
                        </div>
                    </div>
                    <div class="one_line two_lines">
                        <div class="half_line">
                            <label>Nombre del destinatario:</label>
                            <input type="text" placeholder="Brenda">
                        </div>
                        <div class="half_line">
                            <label>E-Mail del destinatario:</label>
                            <input type="email" placeholder="usuario@dominio.com">
                        </div>
                    </div>
                    <div class="one_line">
                        <label>Comentario</label>
                        <input  type="text" placeholder="Comentario">
                    </div>
                    <div class="one_line">
                        <input type="submit" value="Enviar" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="blackLayer"></div>
<?php include('footer.php'); ?>