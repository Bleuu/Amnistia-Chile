<?php include ('header.php'); ?>
<section class="contacto">
    <div class="wrap">
        <div class="cont_cnto">
            <div class="map_sup" id="map_sup">
                <div class="wrap">
                    <!-- <img src="" alt="aqui"> -->
                    <script>
                        function initialize() {
                            //MAPA
                            var myLatlng = new google.maps.LatLng(-33.432318, -70.622318);
                            var thisLatlng = new google.maps.LatLng(-33.432299, -70.622345);
                            var myOptions = {
                                zoom: 16, //nivel de zoom
                                center: myLatlng,
                                scrollwheel: true,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            }
                            var map = new google.maps.Map(document.getElementById("map_sup"), myOptions);
                            var image = 'img/map.png'; //imagen del marcador
                            var marker = new google.maps.Marker({
                                position: thisLatlng,
                                map: map,
                                icon: image
                            });
                            marker.setMap(map);
                        }
                        google.maps.event.addDomListener(window, 'load', initialize);
                    </script>
                </div>
            </div>
        </div>
        <div class="izq_cto">
            <div class="txt_izq">
                <h4>ESTRATEGIA DIGITAL LOREM IPSUM SIT A MET MORBI NULLA THIS IS SPARTA.</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque rutrum purus sit amet ornare. Morbi nec justo sagittis magna venenatis semper laoreet eu purus. Donec ante diam, suscipit ac lectus quis, dictum ornare ipsum. Morbi pharetra ipsum ac pharetra rutrum.</p>
            </div>
            <div class="dts_contact">
                <div class="datos">
                    <div class="img_dt" id="mail"></div>
                    <div class="mail">
                        <a href="mailto:info@didigital.cl">info@didigital.cl</a>
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
            </div>
        </div>
        <div class="der_cto">
            <div class="form">
                <form action="">
                    <div class="line required error">
                        <label for="contact[name]" class="special">Nombre</label>
                        <input type="text"  id="contact[name]" name="Nombre_contacto">
                        <div class="error_msg">Este campo tiene un error. <span class="tri"></span></div>
                    </div>
                    <div class="line required email">
                        <label for="contact[mail]" class="special mail ">Correo electrónico:</label>
                        <input type="email" id="contact[mail]" name="Correo_contacto">
                        <div class="error_msg">Este campo tiene un error. <span class="tri"></span></div>
                    </div>
                    <div class="line">
                        <label for="contact[phone]" class="special phone">Teléfono:</label>
                        <input type="tel" id="contact[phone]"  name="Telefono_contacto">
                        <div class="error_msg">Este campo tiene un error. <span class="tri"></span></div>
                    </div>
                    <div class="line multi required">
                        <label for="contact[text]" class="special text">Consulta:</label>
                        <textarea name="Mensaje_contacto" id="contact[text]"></textarea>
                        <div class="error_msg">Este campo tiene un error. <span class="tri"></span></div>
                    </div>
                    <div class="line capt required">
                        <!-- captcha -->
                    </div>
                    <div class="line_send">
                        <p id="feed_msg"></p> 
                        <input type="submit" value="Enviar Consulta" class="send"> 
                        <p class="ob">*Todos los campos son obligatorios.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>