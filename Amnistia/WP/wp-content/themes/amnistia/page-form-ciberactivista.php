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
        $mails = $mysqli->query('SELECT * FROM socios where email1 = "'.$_POST['email'].'"');
        $row = $mails->num_rows;
        /*DESACTIVA LOS ERRORES*/  //$row=0;
        if(!$resp->is_valid){
            $error="capt";
        }else{
            if(empty($row)){
                $postCompleto=array(
                    'first_name' => '',
                    'last_name' => '',
                    '00N50000001PUPe' => '',
                    '00N50000001PUNi' => '',
                    'email' => '',
                    '00N50000002e45f' => '',
                    '00N50000002e45k' => '',
                    '00N50000002e45p' => '',
                    'street' => '',
                    '00N50000002e45u' => '',
                    '00N50000001VI89' => '',
                    '00N50000001VI87' => '',
                    'phone' => '',
                    '00N50000001PUQc' => '',
                    'mobile' => '',
                    '00N50000002e469' => '',
                    '00N50000001PUQ3' => '',
                    '00N50000001krPt' => '',
                    'description' => '',
                );
                $postReal=array_merge($postCompleto,$_POST);

                $query = 'INSERT INTO socios values ("", "'.$postReal['first_name'].'", "'.$postReal['last_name'].'", "'.$postReal['00N50000001PUPe'].'"'
                    .', "'.date('Y-m-d',strtotime($postReal['00N50000001PUNi'])).'", "'.$postReal['email'].'", "'.$postReal['00N50000002e45f'].'", "'.$postReal['00N50000002e45k'].
                    '", "'.$postReal['00N50000002e45p'].'", "'.$postReal['street'].'", "'.$postReal['00N50000002e45u'].'", "'.$postReal['00N50000001VI89'].'", "'.$postReal['00N50000001VI87'].'", "'.$postReal['phone'].'"'
                    .', "'.$postReal['00N50000001PUQc'].'", "'.$postReal['mobile'].'", "'.$postReal['00N50000002e469'].'", "'.$postReal['00N50000001PUQ3'].'", "'.$postReal['00N50000001krPt'].'", "'.$postReal['description'].'");';

                $mysqli->query($query);
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
<script>
    <?php if(isset($_POST['00N50000002e45u'])){ ?>$(function(){ $('#00N50000002e45u option[value="<?php echo $_POST['00N50000002e45u']; ?>"]').attr('selected', 'selected'); });<?php } ?>
    <?php if(isset($_POST['00N50000001VI87'])){ ?>$(function(){ $('#00N50000001VI87 option[value="<?php echo $_POST['00N50000001VI87']; ?>"]').attr('selected', 'selected'); });<?php } ?>
    <?php if(isset($_POST['00N50000002e469'])){ ?>$(function(){ $('#00N50000002e469 option[value="<?php echo $_POST['00N50000002e469']; ?>"]').attr('selected', 'selected'); });<?php } ?>
    <?php if(isset($_POST['00N50000001PUQ3'])){ ?>$(function(){ $('#00N50000001PUQ3 option[value="<?php echo $_POST['00N50000001PUQ3']; ?>"]').attr('selected', 'selected'); });<?php } ?>
    <?php if(isset($_POST['00N50000001krPt'])){ ?>$(function(){ $('#00N50000001krPt option[value="<?php echo $_POST['00N50000001krPt']; ?>"]').attr('selected', 'selected'); });<?php } ?>
</script>

<div class="container content">
    <div class="wrap">
        <div class="main">
            <div class="breadcrumb">
                <a href="<?php bloginfo('url'); ?>" title="Volver al inicio">Inicio</a> &#9658; <a href="<?php bloginfo('url'); ?>/ciberactivista" title="Ciberactivista">Ciberactivista</a>
            </div>
            <div class="content_box wysiwyg">
                <?php  if(have_posts()) : while(have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
            <form id="formSales" action="<?php if(isset($error) && $error=="zero")echo "https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"; ?>" method="post">
                <input type="hidden" name="oid" value="00D500000006sUG">
                <input type="hidden" name="retURL" value="<?php the_permalink(); ?>?exito=1">
                <input type="hidden" name="00N50000001PUR6" value="CyberActivista">
                <input type="hidden" name="00N50000001VI85" value="Chile">
                <section class="second">
                    <div class="section_banner"></div>
                    <div class="label_second">
                        <span class=label_left></span>Datos personales<span class=label_right></span>
                    </div>
                    <div class="contactForm">
                        <?php if(isset($_GET['exito']) && $_GET['exito']==1){ ?>
                        <div class="line msgDone">
                            ¡Envío satisfactorio!
                        </div>
                        <?php } ?>
                        <div class="line">
                            <div class="halfLine">
                                <label><strong style="color:red;">(*)</strong>Nombre:</label>
                                <input class="requerido" type="text" placeholder="Juan" id="first_name" name="first_name" value="<?php if(isset($_POST['first_name']))echo $_POST['first_name']; ?>">
                            </div>
                            <div class="halfLine">
                                <label><strong style="color:red;">(*)</strong>Apellidos:</label>
                                <input class="requerido" type="text" placeholder="Perez" id="last_name" name="last_name" value="<?php if(isset($_POST['first_name']))echo $_POST['last_name']; ?>">
                            </div>
                        </div>
                        <div class="line">
                            <div class="halfLine">
                                <label>RUT:</label>
                                <input class="requerido" type="text" placeholder="12.345.678-9" id="00N50000001PUPe" name="00N50000001PUPe" value="<?php if(isset($_POST['00N50000001PUPe']))echo $_POST['00N50000001PUPe']; ?>">
                            </div>
                            <div class="halfLine">
                                <label><strong style="color:red;">(*)</strong>Fecha de nacimiento:</label>
                                <input class="requerido" type="datetime" id="datepicker" id="00N50000001PUNi" name="00N50000001PUNi" value="<?php if(isset($_POST['00N50000001PUNi']))echo $_POST['00N50000001PUNi']; ?>">
                            </div>
                        </div>
                        <div class="line">
                            <div class="halfLine">
                                <label><strong style="color:red;">(*)</strong>E-mail 1:</label>
                                <input id="mailInput" class="requerido" type="email" placeholder="usuario@dominio.cl" id="email" name="email" value="<?php if(isset($_POST['email']))echo $_POST['email']; ?>">
                            </div>
                            <div class="halfLine">
                                <label>E-mail 2:</label>
                                <input type="email" placeholder="usuario@dominio.cl" class="error" id="00N50000002e45f" name="00N50000002e45f" value="<?php if(isset($_POST['00N50000002e45f']))echo $_POST['00N50000002e45f']; ?>">
                            </div>
                        </div>
                        <div class="line">
                            <div class="halfLine">
                                <label>Facebook:</label>
                                <input type="text" placeholder="/usuario" id="00N50000002e45k" name="00N50000002e45k" value="<?php if(isset($_POST['00N50000002e45k']))echo $_POST['00N50000002e45k']; ?>">
                            </div>
                            <div class="halfLine">
                                <label>Twitter:</label>
                                <input type="text" placeholder="@usuario" class="error" id="00N50000002e45p" name="00N50000002e45p" value="<?php if(isset($_POST['00N50000002e45p']))echo $_POST['00N50000002e45p']; ?>">
                            </div>
                        </div>
                        <div class="line">
                            <div class="halfLine">
                                <label>Dirección:</label>
                                <input class="requerido" type="text" placeholder="ej: Av. Alameda 562" name="street" value="<?php if(isset($_POST['street']))echo $_POST['street']; ?>">
                            </div>
                            <div class="halfLine">
                                <label>Comuna:</label>
                                <select class="requerido" id="00N50000002e45u" name="00N50000002e45u">
                                    <option value=""></option>
                                    <option value="ALGARROBO">ALGARROBO</option>
                                    <option value="ALHUE">ALHUE</option>
                                    <option value="ALTO BIOBIO">ALTO BIOBIO</option>
                                    <option value="ALTO DEL CARMEN">ALTO DEL CARMEN</option>
                                    <option value="ALTO HOSPICIO">ALTO HOSPICIO</option>
                                    <option value="ANCUD">ANCUD</option>
                                    <option value="ANDACOLLO">ANDACOLLO</option>
                                    <option value="ANGOL">ANGOL</option>
                                    <option value="ANTOFAGASTA">ANTOFAGASTA</option>
                                    <option value="ANTUCO">ANTUCO</option>
                                    <option value="ARAUCO">ARAUCO</option>
                                    <option value="ARICA">ARICA</option>
                                    <option value="AYSEN">AYSEN</option>
                                    <option value="BUIN">BUIN</option>
                                    <option value="BULNES">BULNES</option>
                                    <option value="CABILDO">CABILDO</option>
                                    <option value="CABO DE HORNOS">CABO DE HORNOS</option>
                                    <option value="CABRERO">CABRERO</option>
                                    <option value="CALAMA">CALAMA</option>
                                    <option value="CALBUCO">CALBUCO</option>
                                    <option value="CALDERA">CALDERA</option>
                                    <option value="CALERA DE TANGO">CALERA DE TANGO</option>
                                    <option value="CALLE LARGA">CALLE LARGA</option>
                                    <option value="CAMARONES">CAMARONES</option>
                                    <option value="CAMINA">CAMINA</option>
                                    <option value="CANELA">CANELA</option>
                                    <option value="CANETE">CANETE</option>
                                    <option value="CARAHUE">CARAHUE</option>
                                    <option value="CARTAGENA">CARTAGENA</option>
                                    <option value="CASABLANCA">CASABLANCA</option>
                                    <option value="CASTRO">CASTRO</option>
                                    <option value="CATEMU">CATEMU</option>
                                    <option value="CAUQUENES">CAUQUENES</option>
                                    <option value="CERRILLOS">CERRILLOS</option>
                                    <option value="CERRO NAVIA">CERRO NAVIA</option>
                                    <option value="CHAITEN">CHAITEN</option>
                                    <option value="CHANARAL">CHANARAL</option>
                                    <option value="CHANCO">CHANCO</option>
                                    <option value="CHEPICA">CHEPICA</option>
                                    <option value="CHIGUAYANTE">CHIGUAYANTE</option>
                                    <option value="CHILE CHICO">CHILE CHICO</option>
                                    <option value="CHILLAN">CHILLAN</option>
                                    <option value="CHILLAN VIEJO">CHILLAN VIEJO</option>
                                    <option value="CHIMBARONGO">CHIMBARONGO</option>
                                    <option value="CHOLCHOL">CHOLCHOL</option>
                                    <option value="CHONCHI">CHONCHI</option>
                                    <option value="CISNES">CISNES</option>
                                    <option value="COBQUECURA">COBQUECURA</option>
                                    <option value="COCHAMO">COCHAMO</option>
                                    <option value="COCHRANE">COCHRANE</option>
                                    <option value="CODEGUA">CODEGUA</option>
                                    <option value="COELEMU">COELEMU</option>
                                    <option value="COIHUECO">COIHUECO</option>
                                    <option value="COINCO">COINCO</option>
                                    <option value="COLBUN">COLBUN</option>
                                    <option value="COLCHANE">COLCHANE</option>
                                    <option value="COLINA">COLINA</option>
                                    <option value="COLLIPULLI">COLLIPULLI</option>
                                    <option value="COLTAUCO">COLTAUCO</option>
                                    <option value="COMBARBALA">COMBARBALA</option>
                                    <option value="CONCEPCION">CONCEPCION</option>
                                    <option value="CONCHALI">CONCHALI</option>
                                    <option value="CONCON">CONCON</option>
                                    <option value="CONSTITUCION">CONSTITUCION</option>
                                    <option value="CONTULMO">CONTULMO</option>
                                    <option value="COPIAPO">COPIAPO</option>
                                    <option value="COQUIMBO">COQUIMBO</option>
                                    <option value="CORONEL">CORONEL</option>
                                    <option value="CORRAL">CORRAL</option>
                                    <option value="COYHAIQUE">COYHAIQUE</option>
                                    <option value="CUNCO">CUNCO</option>
                                    <option value="CURACAUTIN">CURACAUTIN</option>
                                    <option value="CURACAVI">CURACAVI</option>
                                    <option value="CURACO DE VELEZ">CURACO DE VELEZ</option>
                                    <option value="CURANILAHUE">CURANILAHUE</option>
                                    <option value="CURARREHUE">CURARREHUE</option>
                                    <option value="CUREPTO">CUREPTO</option>
                                    <option value="CURICO">CURICO</option>
                                    <option value="DALCAHUE">DALCAHUE</option>
                                    <option value="DIEGO DE ALMAGRO">DIEGO DE ALMAGRO</option>
                                    <option value="DONIHUE">DONIHUE</option>
                                    <option value="EL BOSQUE">EL BOSQUE</option>
                                    <option value="EL CARMEN">EL CARMEN</option>
                                    <option value="EL MONTE">EL MONTE</option>
                                    <option value="EL QUISCO">EL QUISCO</option>
                                    <option value="EL TABO">EL TABO</option>
                                    <option value="EMPEDRADO">EMPEDRADO</option>
                                    <option value="ERCILLA">ERCILLA</option>
                                    <option value="ESTACION CENTRAL">ESTACION CENTRAL</option>
                                    <option value="FLORIDA">FLORIDA</option>
                                    <option value="FREIRE">FREIRE</option>
                                    <option value="FREIRINA">FREIRINA</option>
                                    <option value="FRESIA">FRESIA</option>
                                    <option value="FRUTILLAR">FRUTILLAR</option>
                                    <option value="FUTALEUFU">FUTALEUFU</option>
                                    <option value="FUTRONO">FUTRONO</option>
                                    <option value="GALVARINO">GALVARINO</option>
                                    <option value="GENERAL LAGOS">GENERAL LAGOS</option>
                                    <option value="GORBEA">GORBEA</option>
                                    <option value="GRANEROS">GRANEROS</option>
                                    <option value="GUAITECAS">GUAITECAS</option>
                                    <option value="HIJUELAS">HIJUELAS</option>
                                    <option value="HUALAIHUE">HUALAIHUE</option>
                                    <option value="HUALANE">HUALANE</option>
                                    <option value="HUALPEN">HUALPEN</option>
                                    <option value="HUALQUI">HUALQUI</option>
                                    <option value="HUARA">HUARA</option>
                                    <option value="HUASCO">HUASCO</option>
                                    <option value="HUECHURABA">HUECHURABA</option>
                                    <option value="ILLAPEL">ILLAPEL</option>
                                    <option value="INDEPENDENCIA">INDEPENDENCIA</option>
                                    <option value="IQUIQUE">IQUIQUE</option>
                                    <option value="ISLA DE MAIPO">ISLA DE MAIPO</option>
                                    <option value="ISLA DE PASCUA">ISLA DE PASCUA</option>
                                    <option value="JUAN FERNANDEZ">JUAN FERNANDEZ</option>
                                    <option value="LA CALERA">LA CALERA</option>
                                    <option value="LA CISTERNA">LA CISTERNA</option>
                                    <option value="LA CRUZ">LA CRUZ</option>
                                    <option value="LA ESTRELLA">LA ESTRELLA</option>
                                    <option value="LA FLORIDA">LA FLORIDA</option>
                                    <option value="LAGO RANCO">LAGO RANCO</option>
                                    <option value="LAGO VERDE">LAGO VERDE</option>
                                    <option value="LA GRANJA">LA GRANJA</option>
                                    <option value="LAGUNA BLANCA">LAGUNA BLANCA</option>
                                    <option value="LA HIGUERA">LA HIGUERA</option>
                                    <option value="LAJA">LAJA</option>
                                    <option value="LA LIGUA">LA LIGUA</option>
                                    <option value="LAMPA">LAMPA</option>
                                    <option value="LANCO">LANCO</option>
                                    <option value="LA PINTANA">LA PINTANA</option>
                                    <option value="LA REINA">LA REINA</option>
                                    <option value="LAS CABRAS">LAS CABRAS</option>
                                    <option value="LAS CONDES">LAS CONDES</option>
                                    <option value="LA SERENA">LA SERENA</option>
                                    <option value="LA UNION">LA UNION</option>
                                    <option value="LAUTARO">LAUTARO</option>
                                    <option value="LEBU">LEBU</option>
                                    <option value="LICANTEN">LICANTEN</option>
                                    <option value="LIMACHE">LIMACHE</option>
                                    <option value="LINARES">LINARES</option>
                                    <option value="LITUECHE">LITUECHE</option>
                                    <option value="LLANQUIHUE">LLANQUIHUE</option>
                                    <option value="LLAY-LLAY">LLAY-LLAY</option>
                                    <option value="LO BARNECHEA">LO BARNECHEA</option>
                                    <option value="LO ESPEJO">LO ESPEJO</option>
                                    <option value="LOLOL">LOLOL</option>
                                    <option value="LONCOCHE">LONCOCHE</option>
                                    <option value="LONGAVI">LONGAVI</option>
                                    <option value="LONQUIMAY">LONQUIMAY</option>
                                    <option value="LO PRADO">LO PRADO</option>
                                    <option value="LOS ALAMOS">LOS ALAMOS</option>
                                    <option value="LOS ANDES">LOS ANDES</option>
                                    <option value="LOS ANGELES">LOS ANGELES</option>
                                    <option value="LOS LAGOS">LOS LAGOS</option>
                                    <option value="LOS MUERMOS">LOS MUERMOS</option>
                                    <option value="LOS SAUCES">LOS SAUCES</option>
                                    <option value="LOS VILOS">LOS VILOS</option>
                                    <option value="LOTA">LOTA</option>
                                    <option value="LUMACO">LUMACO</option>
                                    <option value="MACHALI">MACHALI</option>
                                    <option value="MACUL">MACUL</option>
                                    <option value="MAFIL">MAFIL</option>
                                    <option value="MAIPU">MAIPU</option>
                                    <option value="MALLOA">MALLOA</option>
                                    <option value="MARCHIGUE">MARCHIGUE</option>
                                    <option value="MARIA ELENA">MARIA ELENA</option>
                                    <option value="MARIA PINTO">MARIA PINTO</option>
                                    <option value="MARIQUINA">MARIQUINA</option>
                                    <option value="MAULE">MAULE</option>
                                    <option value="MAULLIN">MAULLIN</option>
                                    <option value="MEJILLONES">MEJILLONES</option>
                                    <option value="MELIPEUCO">MELIPEUCO</option>
                                    <option value="MELIPILLA">MELIPILLA</option>
                                    <option value="MOLINA">MOLINA</option>
                                    <option value="MONTE PATRIA">MONTE PATRIA</option>
                                    <option value="MULCHEN">MULCHEN</option>
                                    <option value="NACIMIENTO">NACIMIENTO</option>
                                    <option value="NANCAGUA">NANCAGUA</option>
                                    <option value="NATALES">NATALES</option>
                                    <option value="NAVIDAD">NAVIDAD</option>
                                    <option value="NEGRETE">NEGRETE</option>
                                    <option value="NINHUE">NINHUE</option>
                                    <option value="NIQUEN">NIQUEN</option>
                                    <option value="NOGALES">NOGALES</option>
                                    <option value="NUEVA IMPERIAL">NUEVA IMPERIAL</option>
                                    <option value="NUNOA">NUNOA</option>
                                    <option value="OHIGGINS">OHIGGINS</option>
                                    <option value="OLIVAR">OLIVAR</option>
                                    <option value="OLLAGUE">OLLAGUE</option>
                                    <option value="OLMUE">OLMUE</option>
                                    <option value="OSORNO">OSORNO</option>
                                    <option value="OVALLE">OVALLE</option>
                                    <option value="PADRE HURTADO">PADRE HURTADO</option>
                                    <option value="PADRE LAS CASAS">PADRE LAS CASAS</option>
                                    <option value="PAIHUANO">PAIHUANO</option>
                                    <option value="PAILLACO">PAILLACO</option>
                                    <option value="PAINE">PAINE</option>
                                    <option value="PALENA">PALENA</option>
                                    <option value="PALMILLA">PALMILLA</option>
                                    <option value="PANGUIPULLI">PANGUIPULLI</option>
                                    <option value="PANQUEHUE">PANQUEHUE</option>
                                    <option value="PAPUDO">PAPUDO</option>
                                    <option value="PAREDONES">PAREDONES</option>
                                    <option value="PARRAL">PARRAL</option>
                                    <option value="PEDRO AGUIRRE CERDA">PEDRO AGUIRRE CERDA</option>
                                    <option value="PELARCO">PELARCO</option>
                                    <option value="PELLUHUE">PELLUHUE</option>
                                    <option value="PEMUCO">PEMUCO</option>
                                    <option value="PENAFLOR">PENAFLOR</option>
                                    <option value="PENALOLEN">PENALOLEN</option>
                                    <option value="PENCAHUE">PENCAHUE</option>
                                    <option value="PENCO">PENCO</option>
                                    <option value="PERALILLO">PERALILLO</option>
                                    <option value="PERQUENCO">PERQUENCO</option>
                                    <option value="PETORCA">PETORCA</option>
                                    <option value="PEUMO">PEUMO</option>
                                    <option value="PICA">PICA</option>
                                    <option value="PICHIDEGUA">PICHIDEGUA</option>
                                    <option value="PICHILEMU">PICHILEMU</option>
                                    <option value="PINTO">PINTO</option>
                                    <option value="PIRQUE">PIRQUE</option>
                                    <option value="PITRUFQUEN">PITRUFQUEN</option>
                                    <option value="PLACILLA">PLACILLA</option>
                                    <option value="PORTEZUELO">PORTEZUELO</option>
                                    <option value="PORVENIR">PORVENIR</option>
                                    <option value="POZO ALMONTE">POZO ALMONTE</option>
                                    <option value="PRIMAVERA">PRIMAVERA</option>
                                    <option value="PROVIDENCIA">PROVIDENCIA</option>
                                    <option value="PUCHUNCAVI">PUCHUNCAVI</option>
                                    <option value="PUCON">PUCON</option>
                                    <option value="PUDAHUEL">PUDAHUEL</option>
                                    <option value="PUENTE ALTO">PUENTE ALTO</option>
                                    <option value="PUERTO MONTT">PUERTO MONTT</option>
                                    <option value="PUERTO OCTAY">PUERTO OCTAY</option>
                                    <option value="PUERTO VARAS">PUERTO VARAS</option>
                                    <option value="PUMANQUE">PUMANQUE</option>
                                    <option value="PUNITAQUI">PUNITAQUI</option>
                                    <option value="PUNTA ARENAS">PUNTA ARENAS</option>
                                    <option value="PUQUELDON">PUQUELDON</option>
                                    <option value="PUREN">PUREN</option>
                                    <option value="PURRANQUE">PURRANQUE</option>
                                    <option value="PUTAENDO">PUTAENDO</option>
                                    <option value="PUTRE">PUTRE</option>
                                    <option value="PUYEHUE">PUYEHUE</option>
                                    <option value="QUEILEN">QUEILEN</option>
                                    <option value="QUELLON">QUELLON</option>
                                    <option value="QUEMCHI">QUEMCHI</option>
                                    <option value="QUILACO">QUILACO</option>
                                    <option value="QUILICURA">QUILICURA</option>
                                    <option value="QUILLECO">QUILLECO</option>
                                    <option value="QUILLON">QUILLON</option>
                                    <option value="QUILLOTA">QUILLOTA</option>
                                    <option value="QUILPUE">QUILPUE</option>
                                    <option value="QUINCHAO">QUINCHAO</option>
                                    <option value="QUINTA DE TILCOCO">QUINTA DE TILCOCO</option>
                                    <option value="QUINTA NORMAL">QUINTA NORMAL</option>
                                    <option value="QUINTERO">QUINTERO</option>
                                    <option value="QUIRIHUE">QUIRIHUE</option>
                                    <option value="RANCAGUA">RANCAGUA</option>
                                    <option value="RANQUIL">RANQUIL</option>
                                    <option value="RAUCO">RAUCO</option>
                                    <option value="RECOLETA">RECOLETA</option>
                                    <option value="RENAICO">RENAICO</option>
                                    <option value="RENCA">RENCA</option>
                                    <option value="RENGO">RENGO</option>
                                    <option value="REQUINOA">REQUINOA</option>
                                    <option value="RETIRO">RETIRO</option>
                                    <option value="RINCONADA">RINCONADA</option>
                                    <option value="RIO BUENO">RIO BUENO</option>
                                    <option value="RIO CLARO">RIO CLARO</option>
                                    <option value="RIO HURTADO">RIO HURTADO</option>
                                    <option value="RIO IBANEZ">RIO IBANEZ</option>
                                    <option value="RIO NEGRO">RIO NEGRO</option>
                                    <option value="RIO VERDE">RIO VERDE</option>
                                    <option value="ROMERAL">ROMERAL</option>
                                    <option value="SAAVEDRA">SAAVEDRA</option>
                                    <option value="SAGRADA FAMILIA">SAGRADA FAMILIA</option>
                                    <option value="SALAMANCA">SALAMANCA</option>
                                    <option value="SAN ANTONIO">SAN ANTONIO</option>
                                    <option value="SAN BERNARDO">SAN BERNARDO</option>
                                    <option value="SAN CARLOS">SAN CARLOS</option>
                                    <option value="SAN CLEMENTE">SAN CLEMENTE</option>
                                    <option value="SAN ESTEBAN">SAN ESTEBAN</option>
                                    <option value="SAN FABIAN">SAN FABIAN</option>
                                    <option value="SAN FELIPE">SAN FELIPE</option>
                                    <option value="SAN FERNANDO">SAN FERNANDO</option>
                                    <option value="SAN FRANCISCO DE MOSTAZAL">SAN FRANCISCO DE MOSTAZAL</option>
                                    <option value="SAN GREGORIO">SAN GREGORIO</option>
                                    <option value="SAN IGNACIO">SAN IGNACIO</option>
                                    <option value="SAN JAVIER">SAN JAVIER</option>
                                    <option value="SAN JOAQUIN">SAN JOAQUIN</option>
                                    <option value="SAN JOSE DE MAIPO">SAN JOSE DE MAIPO</option>
                                    <option value="SAN JUAN DE LA COSTA">SAN JUAN DE LA COSTA</option>
                                    <option value="SAN MIGUEL">SAN MIGUEL</option>
                                    <option value="SAN NICOLAS">SAN NICOLAS</option>
                                    <option value="SAN PABLO">SAN PABLO</option>
                                    <option value="SAN PEDRO">SAN PEDRO</option>
                                    <option value="SAN PEDRO DE ATACAMA">SAN PEDRO DE ATACAMA</option>
                                    <option value="SAN PEDRO DE LA PAZ">SAN PEDRO DE LA PAZ</option>
                                    <option value="SAN RAFAEL">SAN RAFAEL</option>
                                    <option value="SAN RAMON">SAN RAMON</option>
                                    <option value="SAN ROSENDO">SAN ROSENDO</option>
                                    <option value="SANTA BARBARA">SANTA BARBARA</option>
                                    <option value="SANTA CRUZ">SANTA CRUZ</option>
                                    <option value="SANTA JUANA">SANTA JUANA</option>
                                    <option value="SANTA MARIA">SANTA MARIA</option>
                                    <option value="SANTIAGO">SANTIAGO</option>
                                    <option value="SANTIAGO OESTE">SANTIAGO OESTE</option>
                                    <option value="SANTIAGO SUR">SANTIAGO SUR</option>
                                    <option value="SANTO DOMINGO">SANTO DOMINGO</option>
                                    <option value="SAN VICENTE">SAN VICENTE</option>
                                    <option value="SIERRA GORDA">SIERRA GORDA</option>
                                    <option value="TALAGANTE">TALAGANTE</option>
                                    <option value="TALCA">TALCA</option>
                                    <option value="TALCAHUANO">TALCAHUANO</option>
                                    <option value="TALTAL">TALTAL</option>
                                    <option value="TEMUCO">TEMUCO</option>
                                    <option value="TENO">TENO</option>
                                    <option value="TEODORO SCHMIDT">TEODORO SCHMIDT</option>
                                    <option value="TIERRA AMARILLA">TIERRA AMARILLA</option>
                                    <option value="TIL-TIL">TIL-TIL</option>
                                    <option value="TIMAUKEL">TIMAUKEL</option>
                                    <option value="TIRUA">TIRUA</option>
                                    <option value="TOCOPILLA">TOCOPILLA</option>
                                    <option value="TOLTEN">TOLTEN</option>
                                    <option value="TOME">TOME</option>
                                    <option value="TORRES DEL PAINE">TORRES DEL PAINE</option>
                                    <option value="TORTEL">TORTEL</option>
                                    <option value="TRAIGUEN">TRAIGUEN</option>
                                    <option value="TREHUACO">TREHUACO</option>
                                    <option value="TUCAPEL">TUCAPEL</option>
                                    <option value="VALDIVIA">VALDIVIA</option>
                                    <option value="VALLENAR">VALLENAR</option>
                                    <option value="VALPARAISO">VALPARAISO</option>
                                    <option value="VICHUQUEN">VICHUQUEN</option>
                                    <option value="VICTORIA">VICTORIA</option>
                                    <option value="VICUNA">VICUNA</option>
                                    <option value="VILCUN">VILCUN</option>
                                    <option value="VILLA ALEGRE">VILLA ALEGRE</option>
                                    <option value="VILLA ALEMANA">VILLA ALEMANA</option>
                                    <option value="VILLARRICA">VILLARRICA</option>
                                    <option value="VINA DEL MAR">VINA DEL MAR</option>
                                    <option value="VITACURA">VITACURA</option>
                                    <option value="YERBAS BUENAS">YERBAS BUENAS</option>
                                    <option value="YUMBEL">YUMBEL</option>
                                    <option value="YUNGAY">YUNGAY</option>
                                    <option value="ZAPALLAR">ZAPALLAR</option>
                                </select>
                            </div>
                        </div>
                        <div class="line">
                            <div class="halfLine">
                                <label><strong style="color:red;">(*)</strong>Ciudad:</label>
                                <input class="requerido" type="text" placeholder="ej: Santiago" id="00N50000001VI89" name="00N50000001VI89" value="<?php if(isset($_POST['00N50000001VI89']))echo $_POST['00N50000001VI89']; ?>">
                            </div>
                            <div class="halfLine">
                                <label><strong style="color:red;">(*)</strong>Región:</label>
                                <select class="requerido" id="00N50000001VI87" name="00N50000001VI87">
                                    <option value=""></option>
                                    <option value="I REGION DE TARAPACA">I REGION DE TARAPACA</option>
                                    <option value="II REGION DE ANTOFAGASTA">II REGION DE ANTOFAGASTA</option>
                                    <option value="III REGION DE ATACAMA">III REGION DE ATACAMA</option>
                                    <option value="IV REGION DE COQUIMBO">IV REGION DE COQUIMBO</option>
                                    <option value="V REGION DE VALPARAISO">V REGION DE VALPARAISO</option>
                                    <option value="VI REGION DEL LIBERTADOR GENERAL BERNARDO O'HIGGINS">VI REGION DEL LIBERTADOR GENERAL BERNARDO O'HIGGINS</option>
                                    <option value="VII REGION DEL MAULE">VII REGION DEL MAULE</option>
                                    <option value="VIII REGION DEL BIO - BIO">VIII REGION DEL BÍO - BÍO</option>
                                    <option value="IX REGION DE LA ARAUCANIA">IX REGION DE LA ARAUCANIA</option>
                                    <option value="X REGION DE LOS LAGOS">X REGION DE LOS LAGOS</option>
                                    <option value="XI REGION AYSEN DEL GENERAL CARLOS IBAÑEZ DEL CAMPO">XI REGION AYSEN DEL GENERAL CARLOS IBAÑEZ DEL CAMPO</option>
                                    <option value="XII REGION DE MAGALLANES Y LA ANTARTICA CHILENA">XII REGION DE MAGALLANES Y LA ANTARTICA CHILENA</option>
                                    <option value="XIII REGION METROPOLITANA">XIII REGION METROPOLITANA</option>
                                    <option value="XIV REGION DE LOS RIOS">XIV REGION DE LOS RIOS</option>
                                    <option value="XV REGION DE ARICA Y PARINACOTA">XV REGION DE ARICA Y PARINACOTA</option>
                                </select>
                            </div>
                        </div>
                        <div class="line">
                            <div class="halfLine">
                                <label>Teléfono trabajo:</label>
                                <input type="tel" placeholder="ej: 12345678" id="phone" name="phone" value="<?php if(isset($_POST['phone']))echo $_POST['phone']; ?>">
                            </div>
                            <div class="halfLine">
                                <label><strong style="color:red;">(*)</strong>Teléfono Particular:</label>
                                <input type="tel" placeholder="ej: 12345678" class="error" id="00N50000001PUQc" name="00N50000001PUQc" value="<?php if(isset($_POST['00N50000001PUQc']))echo $_POST['00N50000001PUQc']; ?>">
                            </div>
                        </div>
                        <div class="line">
                            <div class="halfLine">
                                <label>Móvil:</label>
                                <input type="tel" placeholder="ej: 12345678" class="error" id="mobile" name="mobile" value="<?php if(isset($_POST['mobile']))echo $_POST['mobile']; ?>">
                            </div>
                            <div class="halfLine">
                                <label>Compañia Móvil:</label>
                                <select name="00N50000002e469" id="00N50000002e469">
                                    <option value="">Seleciona tu Compañia</option>
                                    <option value="Entel">Entel</option>
                                    <option value="Claro">Claro</option>
                                    <option value="Movistar">Movistar</option>
                                    <option value="Vtr">VTR</option>
                                    <option value="Virgin">Virgin Mobile</option>
                                    <option value="Nextel">Nextel</option>
                                </select>
                            </div>
                        </div>
                        <div class="line">
                            <div class="halfLine">
                                <label>Profesión:</label>
                                <select id="00N50000001PUQ3" name="00N50000001PUQ3">
                                    <option value=""></option>
                                    <option value="Abogado/a">Abogado/a</option>
                                    <option value="Actriz/Actor">Actriz/Actor</option>
                                    <option value="Admininistrador/a Público/a">Admininistrador/a Público/a</option>
                                    <option value="Administrativo">Administrativo</option>
                                    <option value="Agricultor">Agricultor</option>
                                    <option value="Analista Gestión">Analista Gestión</option>
                                    <option value="Analista Marketing">Analista Marketing</option>
                                    <option value="Analista Quimico">Analista Quimico</option>
                                    <option value="Analista Sistema">Analista Sistema</option>
                                    <option value="Antropólogo/a">Antropólogo/a</option>
                                    <option value="Arquitecto/a">Arquitecto/a</option>
                                    <option value="Artesano/a">Artesano/a</option>
                                    <option value="Artista">Artista</option>
                                    <option value="Asesor/a Financiero/a">Asesor/a Financiero/a</option>
                                    <option value="Asesora Hogar">Asesora Hogar</option>
                                    <option value="Asistente Ejecutivo/a">Asistente Ejecutivo/a</option>
                                    <option value="Asistente Judicial">Asistente Judicial</option>
                                    <option value="Asistente Social">Asistente Social</option>
                                    <option value="Auxiliar Enfermería">Auxiliar Enfermería</option>
                                    <option value="Auxiliar Paramédico">Auxiliar Paramédico</option>
                                    <option value="Bibliotecario/a">Bibliotecario/a</option>
                                    <option value="Biologo/a">Biologo/a</option>
                                    <option value="Biologo/a Marino">Biologo/a Marino</option>
                                    <option value="Bioquímico/a">Bioquímico/a</option>
                                    <option value="Comerciante">Comerciante</option>
                                    <option value="Comunicador/a">Comunicador/a</option>
                                    <option value="Constructor Civil">Constructor Civil</option>
                                    <option value="Consultor/a">Consultor/a</option>
                                    <option value="Contador/a Auditor">Contador/a Auditor</option>
                                    <option value="Corredor/a de Propiedades">Corredor/a de Propiedades</option>
                                    <option value="Dentista / Odontologa">Dentista / Odontologa</option>
                                    <option value="Dibujante Técnico/Gráfico">Dibujante Técnico/Gráfico</option>
                                    <option value="Director/a Colegio">Director/a Colegio</option>
                                    <option value="Director/a Servicio Publico">Director/a Servicio Publico</option>
                                    <option value="Director/Productor de Cine/Tv/Eventos">Director/Productor de Cine/Tv/Eventos</option>
                                    <option value="Diseñador/a de Ambiente">Diseñador/a de Ambiente</option>
                                    <option value="Diseñador/a de Vesturio">Diseñador/a de Vesturio</option>
                                    <option value="Diseñador/a Gráfico/a">Diseñador/a Gráfico/a</option>
                                    <option value="Diseñador/a Industrial">Diseñador/a Industrial</option>
                                    <option value="Dueña de Casa">Dueña de Casa</option>
                                    <option value="Economista">Economista</option>
                                    <option value="Educadora de Párvulos">Educadora de Párvulos</option>
                                    <option value="Educadora Diferencial">Educadora Diferencial</option>
                                    <option value="Ejecutivo/a de Marketing">Ejecutivo/a de Marketing</option>
                                    <option value="Ejecutivo/a Ventas o Vendedor">Ejecutivo/a Ventas o Vendedor</option>
                                    <option value="Eléctrico/Electricista">Eléctrico/Electricista</option>
                                    <option value="Electromecánico">Electromecánico</option>
                                    <option value="Electrónico Industrial">Electrónico Industrial</option>
                                    <option value="Empleado/a">Empleado/a</option>
                                    <option value="Empleado/a Público/a">Empleado/a Público/a</option>
                                    <option value="Empresario/a / Microempresario">Empresario/a / Microempresario</option>
                                    <option value="Enfermero/a">Enfermero/a</option>
                                    <option value="Escritor/a">Escritor/a</option>
                                    <option value="Escultor/a">Escultor/a</option>
                                    <option value="Estadístico/a">Estadístico/a</option>
                                    <option value="Estudiante Instituto/CFT">Estudiante Instituto/CFT</option>
                                    <option value="Estudiante Liceo/Colegio">Estudiante Liceo/Colegio</option>
                                    <option value="Estudiante Universitario">Estudiante Universitario</option>
                                    <option value="Fotógrafo/a">Fotógrafo/a</option>
                                    <option value="Geografo/a">Geografo/a</option>
                                    <option value="Geólogo">Geólogo</option>
                                    <option value="Ingeniero/a">Ingeniero/a</option>
                                    <option value="Ingeniero/a Acuicultura">Ingeniero/a Acuicultura</option>
                                    <option value="Ingeniero/a Acústico">Ingeniero/a Acústico</option>
                                    <option value="Ingeniero/a Admin. Empresas">Ingeniero/a Admin. Empresas</option>
                                    <option value="Ingeniero/a Agrónomo">Ingeniero/a Agrónomo</option>
                                    <option value="Ingeniero/a Alimentos">Ingeniero/a Alimentos</option>
                                    <option value="Ingeniero/a Ambiental">Ingeniero/a Ambiental</option>
                                    <option value="Ingeniero/a Civil">Ingeniero/a Civil</option>
                                    <option value="Ingeniero/a Comercial">Ingeniero/a Comercial</option>
                                    <option value="Ingeniero/a Computación">Ingeniero/a Computación</option>
                                    <option value="Ingeniero/a Construcción">Ingeniero/a Construcción</option>
                                    <option value="Ingeniero/a Electrónico">Ingeniero/a Electrónico</option>
                                    <option value="Ingeniero/a Estructural">Ingeniero/a Estructural</option>
                                    <option value="Ingeniero/a Finanzas">Ingeniero/a Finanzas</option>
                                    <option value="Ingeniero/a Forestal">Ingeniero/a Forestal</option>
                                    <option value="Ingeniero/a Geógrafo">Ingeniero/a Geógrafo</option>
                                    <option value="Ingeniero/a Industrial">Ingeniero/a Industrial</option>
                                    <option value="Ingeniero/a Informático">Ingeniero/a Informático</option>
                                    <option value="Ingeniero/a Marketing">Ingeniero/a Marketing</option>
                                    <option value="Ingeniero/a Mecánico">Ingeniero/a Mecánico</option>
                                    <option value="Ingeniero/a Mecanico Industrial">Ingeniero/a Mecanico Industrial</option>
                                    <option value="Ingeniero/a Metalúrgico">Ingeniero/a Metalúrgico</option>
                                    <option value="Ingeniero/a Minas">Ingeniero/a Minas</option>
                                    <option value="Ingeniero/a OO.CC.">Ingeniero/a OO.CC.</option>
                                    <option value="Ingeniero/a Pesca">Ingeniero/a Pesca</option>
                                    <option value="Ingeniero/a Prev. Riesgos">Ingeniero/a Prev. Riesgos</option>
                                    <option value="Ingeniero/a Químico">Ingeniero/a Químico</option>
                                    <option value="Ingeniero/a Sistemas">Ingeniero/a Sistemas</option>
                                    <option value="Ingeniero/a Telecomunicaciones">Ingeniero/a Telecomunicaciones</option>
                                    <option value="Ingeniero/a Transporte">Ingeniero/a Transporte</option>
                                    <option value="Jubilado/a">Jubilado/a</option>
                                    <option value="Juez/a">Juez/a</option>
                                    <option value="Junior/Mensajero">Junior/Mensajero</option>
                                    <option value="Kinesiólogo/a">Kinesiólogo/a</option>
                                    <option value="Laboratorista">Laboratorista</option>
                                    <option value="Matron/a">Matron/a</option>
                                    <option value="Médico">Médico</option>
                                    <option value="Médico Siquiatra">Médico Siquiatra</option>
                                    <option value="Médico Veterinario">Médico Veterinario</option>
                                    <option value="Microbiólogo">Microbiólogo</option>
                                    <option value="Músico">Músico</option>
                                    <option value="Obrero/Operario Calificado">Obrero/Operario Calificado</option>
                                    <option value="Otra Profesion/Actividad">Otra Profesion/Actividad</option>
                                    <option value="Paramédico">Paramédico</option>
                                    <option value="Parvularia">Parvularia</option>
                                    <option value="Pastor/Sacerdote">Pastor/Sacerdote</option>
                                    <option value="Periodista">Periodista</option>
                                    <option value="Pintor/a">Pintor/a</option>
                                    <option value="Procurador/a">Procurador/a</option>
                                    <option value="Profesor/a Colegio/Liceo">Profesor/a Colegio/Liceo</option>
                                    <option value="Profesor/a Universidad">Profesor/a Universidad</option>
                                    <option value="Programador Computacional">Programador Computacional</option>
                                    <option value="Proyectista Mecanico">Proyectista Mecanico</option>
                                    <option value="Psicólogo/a">Psicólogo/a</option>
                                    <option value="Psicopedagoga">Psicopedagoga</option>
                                    <option value="Publicista">Publicista</option>
                                    <option value="Químico/a">Químico/a</option>
                                    <option value="Químico Farmacéutico">Químico Farmacéutico</option>
                                    <option value="Relacionador/a Público/a">Relacionador/a Público/a</option>
                                    <option value="Religioso/a">Religioso/a</option>
                                    <option value="Sacerdote">Sacerdote</option>
                                    <option value="Secretaria/Recepcionista">Secretaria/Recepcionista</option>
                                    <option value="Sindicalista">Sindicalista</option>
                                    <option value="Sociólogo/a">Sociólogo/a</option>
                                    <option value="Técnico Acuicola">Técnico Acuicola</option>
                                    <option value="Técnico Administración Empresas">Técnico Administración Empresas</option>
                                    <option value="Técnico Agrícola">Técnico Agrícola</option>
                                    <option value="Técnico Alimentos">Técnico Alimentos</option>
                                    <option value="Técnico Automotriz">Técnico Automotriz</option>
                                    <option value="Técnico Comercio Exterior">Técnico Comercio Exterior</option>
                                    <option value="Técnico Computacional/Informático">Técnico Computacional/Informático</option>
                                    <option value="Técnico Construcción">Técnico Construcción</option>
                                    <option value="Técnico Control Calidad">Técnico Control Calidad</option>
                                    <option value="Técnico Eléctrico/Electromecánico">Técnico Eléctrico/Electromecánico</option>
                                    <option value="Técnico en Ecología">Técnico en Ecología</option>
                                    <option value="Técnico Financiero">Técnico Financiero</option>
                                    <option value="Técnico Forestal">Técnico Forestal</option>
                                    <option value="Técnico Laboratorista">Técnico Laboratorista</option>
                                    <option value="Técnico Mantención Industrial">Técnico Mantención Industrial</option>
                                    <option value="Técnico Mecánico">Técnico Mecánico</option>
                                    <option value="Técnico Metalúrgico">Técnico Metalúrgico</option>
                                    <option value="Técnico Minas">Técnico Minas</option>
                                    <option value="Técnico Naval">Técnico Naval</option>
                                    <option value="Técnico Paramédico">Técnico Paramédico</option>
                                    <option value="Técnico Pesquero">Técnico Pesquero</option>
                                    <option value="Técnico Prevención de Riesgos">Técnico Prevención de Riesgos</option>
                                    <option value="Técnico Proyectista">Técnico Proyectista</option>
                                    <option value="Técnico Químico">Técnico Químico</option>
                                    <option value="Técnico Recursos Humanos">Técnico Recursos Humanos</option>
                                    <option value="Técnico Refrigeración">Técnico Refrigeración</option>
                                    <option value="Técnico Sonido">Técnico Sonido</option>
                                    <option value="Técnico Telecomunicaciones">Técnico Telecomunicaciones</option>
                                    <option value="Técnico Telefonista">Técnico Telefonista</option>
                                    <option value="Técnico Transporte">Técnico Transporte</option>
                                    <option value="Técnico Turismo">Técnico Turismo</option>
                                    <option value="Técnico Universitario">Técnico Universitario</option>
                                    <option value="Tecnólogo Médico">Tecnólogo Médico</option>
                                    <option value="Terapeuta Ocupacional">Terapeuta Ocupacional</option>
                                    <option value="Topógrafo/a">Topógrafo/a</option>
                                    <option value="Traductor/a">Traductor/a</option>
                                    <option value="Visitador/a Médico">Visitador/a Médico</option>
                                </select>
                            </div>
                        </div>
                        <div class="line">
                            <label for="comments">Libro para comentarios</label>
                            <textarea name="description" class="full_field"><?php if(isset($_POST['description']))echo $_POST['description']; ?></textarea>
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
                        <div class="halfLine">
                            <input type="checkbox" name="agree" data-label="" value="">
                            <p class="for_checkbox">Estoy de acuerdo con la <a href="<?php bloginfo('url'); ?>/quienes-somos" title="Estatutos de Amnistía Internacional" target="_blank">visión, misión, principios y trabajo</a> de Amnistía Internacional</p>
                        </div>
                        <div class="halfLine">
                            <input type="checkbox" name="subscripcion" data-label="" value="">
                            <p class="for_checkbox">Conozco y estoy de acuerdo con la <a href="<?php bloginfo('url'); ?>/nota/politica-de-manejo-de-datos-de-amnistia-internacional-chile" target="_blank" title="Politicas de manejo">Política de Manejo de Datos<a/> de Amnistía Internacional Chile</p>
                        </div>
                    </div>
                    <?php if(isset($_GET['exito']) && $_GET['exito']==1){ ?>
                    <div class="line msgDone">
                        ¡Envío satisfactorio!
                    </div>
                    <?php }else{ ?>

                    <?php } ?>
                    <div class="line margin_sumbit">
                        <input id="btnsubmit" type="submit" value="ENVIAR" class="btn btn_pri center">
                    </div>
                    </div>
                </section>
            </form>
    </div><!--main-->
    <aside>
        <?php get_sidebar(); ?>
    </aside>
</div>
</div><!--content-->



<?php get_footer(); ?>