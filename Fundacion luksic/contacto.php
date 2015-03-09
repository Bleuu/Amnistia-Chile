<?php include('header.php'); ?>   
<!--CONTENIDO-->  
  <div id="contenido" class="">
    <div id="ruta">
      <p>Usted está en: <a href="#" title="Ir a Inicio">Inicio</a> / <a href="#" title="Ir a Contacto">Contacto</a></p>
    </div>

    <div id="principal"  class="dos">
      <h2>Contacto</h2>
      <p>Para comunicarse con nuestra Fundación, le invitamos a completar el siguiente formulario. Una vez recibida 
        su consulta, nos contactaremos con Usted a la brevedad</p>
		<div class="contact-form">
				<form accept-charset="utf-8" action="/contacto" method="post">
						<div class="bloque_izq">
								<div>
										<label>Consulta</label>
										<select>
												<option value ="Item 1">Otro</option>
												<option value ="Item 2">Consulta Becas</option>
										</select>
								</div>
								<div style="display: none;">
								<	input type="hidden" value="POST" name="_method" />
								</div>
								<div>
										<label for="Nombre">Nombre</label>
										<input type="text" id="Nombre" name="Nombre" />
								</div>
								<div>
										<label for="Email">Email</label>
										<input type="text" id="Email" name="Email" />
								</div>
								<div>
										<label for="Direccion">Direcci&oacute;n</label>
										<input type="text" id="Direccion" name="Direccion" />
								</div>
								<div>
										<label for="Telefono">Tel&eacute;fono</label>
										<input type="text" id="Telefono" name="Telefono" />
								</div>
								<div>
										<label for="Ciudad">Ciudad</label>
										<input type="text" id="Ciudad" name="Ciudad" />
								</div>
								<div>
										<input type="submit" value="Enviar" />
								</div>
						</div>
						<div class="bloque_der">
								<div>
										<label for="Comentarios">Comentarios</label>
										<textarea rows="3" cols="20" id="Comentarios" name="Comentarios"></textarea>
								</div>
						</div>
				</form>
        </div>
        
    </div> <!-- #principal -->
    
  </div><!--FIN CONTENIDO-->    
  
<!--FOOTER-->    
  <?php include('footer.php'); ?>  