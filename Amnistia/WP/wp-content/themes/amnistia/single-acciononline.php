<?php
$url_actual = get_permalink(get_the_ID());
require_once('recaptchalib.php');
$privatekey = "6Ldz2MsSAAAAAKCigePAKunPmCrS7lf4_C4NLhlq";
$publickey = "6Ldz2MsSAAAAAHSjKiED3Xkahhx68yaNj8H2I_zy";

//Insert Durito para mails usados
if(!empty($_POST['email'])){
    $resp = recaptcha_check_answer($privatekey,
                                   $_SERVER["REMOTE_ADDR"],
                                   $_POST["recaptcha_challenge_field"],
                                   $_POST["recaptcha_response_field"]);
    try {
        /*CAMBIAR ESTA LINEA DE ACUERDO A DATOS DEL SERVIDOR (WP-CONFIG)*/  $mysqli = new mysqli('localhost', 'amnisti1_web2014', 'pass4Amnistia','amnisti1_web2014');
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        $mails = $mysqli->query('SELECT * FROM campanhas where mail = "'.$_POST['email'].'" AND formulario = "'.$_POST['00N50000002ee6B'].'"');
        $row = $mails->num_rows;
        /*BORRAR ESTA LINEA*/  //$row=0;
        if(!$resp->is_valid){
            $error="capt";
        }else{
            if(empty($row)){
                $mysqli->query('INSERT INTO campanhas values ("", "'.$_POST['email'].'", "'.$_POST['00N50000002ee6B'].'");');
                $error="zero";
            }else header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]?exito=1");
        }
        $mysqli->close();
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Stop Tortura - Amnistía Internacional</title>
        <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700" rel="stylesheet" type="text/css">
        <!--<link rel="stylesheet/less" type="text/css" media="all" href="css/style.less" />-->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/camp/css/style.css">

        <script async="" src="//www.google-analytics.com/analytics.js"></script><script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.2.min.js"></script><style type="text/css"></style>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"> 
        <!--<script src="/less/cssless/lessdev.js"></script>-->

        <?php wp_head(); ?>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.2.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/global.js"></script>
        <script type="text/javascript">
            /* scripts */
            $(function() {
                $('.line.error').find('input,select').bind('focus', function(){
                    $(this).parent().removeClass('error');
                });
            });
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-42005917-1', 'amnistia.cl');
            ga('send', 'pageview');

        </script>
        <script>
            $(function(){ 

                <?php if(isset($error) && $error == "zero"){ ?>
                $('#formSales').submit();
                <?php } ?>


                //Revisamos el submit
                $('#formSales').submit(function(e){
                    var error=0;
                    $('.requerido').each(function(){
                        if($.trim($(this).val()) == ''){
                            error=1;
                        }
                    });
                    if (error!=0) {
                        e.preventDefault();
                        alert('Debes llenar los campos requeridos.');
                    }
                });
            });

        </script>
        <?php if(isset($_POST['00N50000001VI85'])){ ?>
        <script>
            $(function(){
                $('option[value="<?php echo $_POST['00N50000001VI85']; ?>"]').attr('selected', 'selected');
            });            
        </script>
        <?php } ?>
    </head>
    <?php if(have_posts()) : while( have_posts()) : the_post();
/*$imgsup = types_render_field("imagen-header", array("id"=>"","output"=>"raw",""=>""));
$imglat = types_render_field("imagen-lateral", array("id"=>"","output"=>"raw",""=>""));
$codecamp = types_render_field("codigo-campana", array("id"=>"","output"=>"raw",""=>""));
*/
$cabecera = get_field('accion_img_cabecera');
$lateral = get_field('accion_img_lateral');
$cabecera_color = get_field('accion_color_cabecera');
$back_color = get_field('accion_color_fondo');
$imglat = types_render_field("imagen-lateral", array("id"=>"","output"=>"raw",""=>""));
$codecamp = get_field('accion_der_lateral');
    ?>
    <body style="background-color: <?php echo $back_color?>;">
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <header style="background-color: <?php echo $cabecera_color; ?>;">
            <div class="img_header">
                <img src="<?php echo $cabecera['url'];?>" alt="<?php echo $cabecera['title'];?>">
            </div>
        </header>
        <?php if(!empty($_GET['exito'])){ ?>
        <section id="thnx">
            <div>
                <div class="cwrap">
                    <div class="cont">
                        <?php the_field('accion_agradecimiento'); ?>
                    </div>
                    <a href="http://amnistiawp.local/asociate/" title="Hazte socio" class="socio">Hazte Socio</a>
                    <div class="share_and_like">
                        <div class="fb-like" data-href="<?php echo $url_actual; ?>" data-width="200" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                        <a href="https://twitter.com/share" class="twitter-share-button" data-lang="es" data-hashtags="amnistia">Twittear</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        <div class="g-plusone"></div>
                    </div><!--share_and_like-->
                </div>
            </div>
        </section>
        <?php }else{ ?>
        <section class="big_cont">
            <div id="content" style="background-color: #fff;">
                <div id="img">
                    <img src="<?php echo $lateral['url'];?>" alt="<?php echo $lateral['title'];?>">
                </div>
                <div class="cwrap">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
                <div id="form">
                    <div class="cwrap" style="background-color: #FFFF00;">
                        <img src="<?php echo get_template_directory_uri(); ?>/camp/img/amnistia_logo.png" alt="Amnistia Internacional">
                        <div class="firma">
                            <img src="<?php echo $codecamp['url'];?>" alt="<?php echo $codecamp['title'];?>">
                        </div>
                        <h2>ENTRA EN ACCIÓN <span>Completando con tus datos</span></h2>

                        <form id="formSales" name="firma" action="<?php if(isset($error) && $error=="zero")echo "https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"; ?>" method="post" novalidate="novalidate">
                            <!--<form name="firma" action="#form" method="post" novalidate="novalidate">-->
                            <input type="hidden" value="00D500000006sUG" name="oid">
                            <input type="hidden" value="<?php the_permalink(); ?>?exito=1" name="retURL"><!-- Poner Campaña en modo cam-paña -->
                            <input type="hidden" value="012500000005SgQ" name="recordType">
                            <input type="hidden" value="<?php the_field('accion_codigo'); ?>" name="00N50000002ee6B"><!-- Poner Campaña en Modo Cam Paña -->

                            <input type="hidden" name="lead_source" value="Acciones Online">

                            <div class="line">
                                <label for="first_name">Nombre*:</label>
                                <input type="text" name="first_name" value="<?php if(isset($_POST['first_name']))echo $_POST['first_name']; ?>" class="requerido">
                            </div>
                            <div class="line">
                                <label for="last_name">Apellidos*</label>
                                <input type="text" name="last_name" value="<?php if(isset($_POST['last_name']))echo $_POST['last_name']; ?>" class="requerido">
                            </div>
                            <div class="line">
                                <label for="email">E-Mail*</label>
                                <input id="mailInput" type="text" name="email" value="<?php if(isset($_POST['email']))echo $_POST['email']; ?>" class="requerido">
                            </div>
                            <div class="line">
                                <label for="phone">Teléfono:</label>
                                <input type="text" name="phone" value="<?php if(isset($_POST['phone']))echo $_POST['phone']; ?>">
                            </div>
                            <div class="line">
                                <label for="00N50000001VI85">País de Residencia*</label>
                                <select name="00N50000001VI85" class="requerido">
                                    <option value=""> -- Seleccione -- </option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Åland Islands">Åland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Anla">Anla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaija">Azerbaija</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrai">Bahrai</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option><option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Beni">Beni</option><option value="Bermuda">Bermuda</option><option value="Bhuta">Bhuta</option><option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option><option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option><option value="Bosnia and Herzevina">Bosnia and Herzevina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroo">Cameroo</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Co">Co</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Con, the Democratic Republic of the">Con, the Democratic Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Côte d'Ivoire">Côte d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Curaçao">Curaçao</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabo">Gabo</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Ma">Isle of Ma</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japa">Japa</option><option value="Jersey">Jersey</option><option value="Jorda">Jorda</option><option value="Kazakhsta">Kazakhsta</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzsta">Kyrgyzsta</option><option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebano">Lebano</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstei">Liechtenstei</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia, the former Yuslav Republic of">Macedonia, the former Yuslav Republic of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Monlia">Monlia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oma">Oma</option><option value="Pakista">Pakista</option><option value="Palau">Palau</option><option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcair">Pitcair</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reino Unido">Reino Unido</option><option value="Romania">Romania</option><option value="Russian Federatio">Russian Federatio</option><option value="Rwanda">Rwanda</option><option value="Saint Barthélemy">Saint Barthélemy</option><option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Martin (French part)">Saint Martin (French part)</option><option value="Saint Pierre and Miquelo">Saint Pierre and Miquelo</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option>
                                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="Spai">Spai</option><option value="Sri Lanka">Sri Lanka</option><option value="Suda">Suda</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Maye">Svalbard and Jan Maye</option><option value="Swaziland">Swaziland</option><option value="Swede">Swede</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tajikista">Tajikista</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="To">To</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Toba">Trinidad and Toba</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenista">Turkmenista</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekista">Uzbekista</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option><option value="Viet Nam">Viet Nam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yeme">Yeme</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>						
                                </select>
                            </div>


                            <div class="line">
                                <div class="input captcha">
                                    <?php
                    echo recaptcha_get_html($publickey);
                                    ?>
                                </div>
                                <?php if(isset($error) && $error=="capt"){ ?>
                                Captcha Incorrecto.
                                <?php } ?>
                            </div>
                            <div class="line">
                                <input  id="btnsubmit" type="submit" value="Enviar" style="color: #fff; background: #000;">
                            </div>
                            <p class="disc">
                                Todos los datos personales enviados serán recolectados, almacenados y utilizados de acuerdo a nuestra <a href="<?php bloginfo('url'); ?>/nota/politica-de-manejo-de-datos-de-amnistia-internacional-chile/" title="Politicas de privacidad" target="_blank">Política de Privacidad</a>. Sólo haremos envío de información relativa a nuestras campañas y actividades.
                            </p>
                        </form>
                        <!--
<div class="foot2">
<div class="wrap">
<p>
<strong>MÁS INFORMACIÓN<br>
<a href="http://www.amnistia.cl/web/node/52835" title="Conocer más" target="_blank">AQUÍ</a></strong>
</p>
<p class="copy">© 2014 Amnesty International</p>
</div>
</div>
-->
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="foot <?php the_field('onl_color_foot'); ?>">
                <p class="copy">© 2014 Amnesty International</p>
            </div>
        </footer>	

        <iframe src="about:blank" style="height: 0px; width: 0px; visibility: hidden; border: none;">This frame prevents back/forward cache problems in Safari.</iframe>
        <?php } ?>
        <?php endwhile; endif; ?>
        <?php wp_footer(); ?>
    </body>
</html>