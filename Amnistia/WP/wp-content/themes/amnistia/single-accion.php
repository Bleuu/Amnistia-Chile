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
        /*CAMBIAR ESTA LINEA DE ACUERDO A DATOS DEL SERVIDOR (WP-CONFIG)*/  $mysqli = new mysqli('localhost', 'root', '','didigital_amnistia_chile');
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

<?php
get_header();
?>
<div class="container content">
    <div class="wrap">
        <div class="main">
            <?php
if(have_posts()) : while(have_posts()) : the_post();
$url_actual = get_permalink(get_the_ID());
if($post->post_type=='accion') {
    $terminacion = 'es';
} else {
    $terminacion = 's';
}
$id_post_actual = get_the_ID();
$categorias_post_actual = get_the_terms($id_post_actual, 'categorias_acciones');

if(!empty($categorias_post_actual)){
    $categoria_post_actual = '';
    foreach($categorias_post_actual as $categoria){
        if (!empty($categoria_post_actual)){
            $categoria_post_actual .= ','.$categoria->slug;  
        }else{
            $categoria_post_actual .= $categoria->slug;
        }
    }
}

$get_meta = types_render_field("accion-meta-actual", array(""=>"",""=>""));
$get_meta_class = (empty($get_meta)) ? ' class="txt"' : '';
$get_meta = (empty($get_meta)) ? 'Solo tu apoyo...' : $get_meta;

            ?>
            
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
                        //else{
                        //    $.ajax({
                        //        url: window.location.pathname,
                        //        type: "POST",
                        //        data: $('#formSales').serialize(),
                        //        async: false,
                        //        success: function(data){
                        //            console.log(data);
                        //            if ($.trim(data)=="zero") {
                        //                $('#formSales').submit();
                        //            }else if ($.trim(data)=="capt") {
                        //                $('#formSales').attr('action','<?php the_permalink(); ?>?capt=1');
                        //                $('#formSales').submit();
                        //            }else if ($.trim(data)=="mail") {
                        //                document.location.href="<?php the_permalink(); ?>?exito=1";
                        //            }
                        //        }
                        //    });
                        //
                        //}
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
            
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>/" title="Inicio">Inicio</a> &#9658; <a href="<?php echo bloginfo('url').'/'.$post->post_type.$terminacion; ?>" title="<?php echo $post->post_type.$terminacion; ?>"><?php echo $post->post_type.$terminacion; ?></a> &#9658; <a><?php the_title(); ?></a>
            </div>
            <div class="share_and_like">
                <div class="fb-like" data-href="<?php echo $url_actual; ?>" data-width="200" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                <a href="https://twitter.com/share" class="twitter-share-button" data-lang="es" data-hashtags="amnistia">Twittear</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                <div class="g-plusone"></div>
            </div><!--share_and_like-->
            <div class="campaign wysiwyg">
                <h1 class="title"><?php the_title(); ?></h1>
                <p class="info_article"><?php the_time('j, M. Y'); ?> <?php echo get_the_term_list( $post->ID, 'categorias_noticias', 'Categoría:', ', ', '' ); ?></p>
                <?php the_content(); ?>
            </div>
            <div class="signature">
                <div class="img_campaign">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail('thumbs-actua'); ?>
                    </a>
                </div>
                <div class="content_campaign">
                    <div class="label_second">
                        <span class=label_left></span>Actúa ahora<span class=label_right></span>
                    </div>
                    <div class="meta_sign">
                        <div class="count">
                            <div class="meta">Meta Actual:<br/>
                                <strong<?php echo $get_meta_class; ?>><?php echo $get_meta;?></strong></div>
                        </div>
                    </div>
                </div>
                <div class="act_now contactForm inlineForm">
                    <p class="information">Campos Obligatorios *</p>
                    <form id="formSales" name="firma" action="<?php if(isset($error) && $error=="zero")echo "https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"; ?>" method="post" novalidate="novalidate">
                        <input type="hidden" value="012500000005SgQAAU" name="oid">
                        <input type="hidden" value="<?php the_permalink(); ?>?exito=1" name="retURL">
                        <input type="hidden" value="012500000000kwYAAQ" name="recordType">
                        <input type="hidden" value="<?php the_field('accion_codigo'); ?>" name="00N50000002ee6B">
                        <input type="hidden" name="lead_source" value="Acciones Urgentes">
                        <div class="line strict">
                            <label>Nombre*:</label>
                            <input type="text" name="first_name" placeholder="texto" class="requerido" value="<?php if(isset($_POST['first_name']))echo $_POST['first_name']; ?>">
                        </div>
                        <div class="line strict">
                            <label>Apellido*:</label>
                            <input type="text"  name="last_name" placeholder="texto" class="requerido" value="<?php if(isset($_POST['last_name']))echo $_POST['last_name']; ?>">
                        </div>
                        <div class="line strict">
                            <label>Email*:</label>
                            <input type="email" name="email" placeholder="usuario@dominio.cl" class="requerido" value="<?php if(isset($_POST['email']))echo $_POST['email']; ?>">
                        </div>
						<input type="hidden" name="00N50000002fOIN" value="<?=date('d-m-Y')?>"/>
                        <div class="line strict">
                            <label>País de residencia*:</label>
                            <select name="00N50000001VI85" class="requerido">
                                <option value=""> -- Seleccione -- </option>
                                <option value="Afghanistan">Afghanistan</option><option value="Åland Islands">Åland Islands</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Anguilla">Anguilla</option><option value="Anla">Anla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaija">Azerbaija</option><option value="Bahamas">Bahamas</option><option value="Bahrai">Bahrai</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Beni">Beni</option><option value="Bermuda">Bermuda</option><option value="Bhuta">Bhuta</option><option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option><option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option><option value="Bosnia and Herzevina">Bosnia and Herzevina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroo">Cameroo</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Co">Co</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Con, the Democratic Republic of the">Con, the Democratic Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Côte d'Ivoire">Côte d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Curaçao">Curaçao</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabo">Gabo</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Ma">Isle of Ma</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japa">Japa</option><option value="Jersey">Jersey</option><option value="Jorda">Jorda</option><option value="Kazakhsta">Kazakhsta</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzsta">Kyrgyzsta</option><option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebano">Lebano</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstei">Liechtenstei</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia, the former Yuslav Republic of">Macedonia, the former Yuslav Republic of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Monlia">Monlia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oma">Oma</option><option value="Pakista">Pakista</option><option value="Palau">Palau</option><option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcair">Pitcair</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Réunio">Réunio</option><option value="Romania">Romania</option><option value="Russian Federatio">Russian Federatio</option><option value="Rwanda">Rwanda</option><option value="Saint Barthélemy">Saint Barthélemy</option><option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Martin (French part)">Saint Martin (French part)</option><option value="Saint Pierre and Miquelo">Saint Pierre and Miquelo</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="Spai">Spai</option><option value="Sri Lanka">Sri Lanka</option><option value="Suda">Suda</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Maye">Svalbard and Jan Maye</option><option value="Swaziland">Swaziland</option><option value="Swede">Swede</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tajikista">Tajikista</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="To">To</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Toba">Trinidad and Toba</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenista">Turkmenista</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekista">Uzbekista</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option><option value="Viet Nam">Viet Nam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yeme">Yeme</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
                            </select>
                                </div>
                            <div class="line strict">
                                <label>Teléfono:</label>
                                <input type="tel" name="phone" placeholder="ej: 94578164" value="<?php if(isset($_POST['phone']))echo $_POST['phone']; ?>">
                            </div>
                            <div class="line strict">
                                <label class="two_row">Código de seguridad:</label>
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
                            </div>
                            <p class="information">Lee nuestras <a href="<?php bloginfo('url'); ?>/nota/politica-de-manejo-de-datos-de-amnistia-internacional-chile/" target="_blank" title="Politicas de privacidad">Políticas de privacidad</a></p>
                            <p class="information" id="letter"><span id="icon-let"></span>Lee nuestra Carta</p>
                            <?php if(!empty($_GET['exito'])){ ?>
                                <p class="ty">Te agradecemos por apoyar nuestra causa.</p>
                                <?php } ?>
                            <div class="line center">
                                <input type="submit" value="" class="send_msj">
                            </div>
                            </form>
                        </div>
                </div>
                <div class="letter_box">
                    <div class="opac_box"></div>
                    <div class="cont_text">
                        <div class="lt_headline">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="cont_oh">
                            <div class="txt_here"><?php the_field('urg_carta'); ?></div>
                        </div>
                        <p class="btn_close" id="lt_close"></p>
                    </div>
                </div>
            </div><!--main-->
            <aside>
                <?php get_sidebar(); ?>
            </aside>
        </div><!--main_full-->

        <?php endwhile; endif; ?>
    </div><!--main_full-->
</div><!--content-->
<?php get_footer(); ?>
