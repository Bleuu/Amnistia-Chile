<?Php
$required = array( //Campos requeridos (colocar el valor del atributo "name")
    'Nombre_contacto',
    'Correo_contacto',
    'Mensaje_contacto'
);

$subject = "Contacto desde sitio OXUS."; //Asunto del correo
$emailTo = "francisco.pardo@didigital.cl"; //Correo del Destinatario

//Texto que aparecerá en el correo
$body = '<h1>Contacto Sitio diDigital</h1>';
$body.= '{data}';

require_once('PHPMailer_5.2.1/class.phpmailer.php');

$data = '<table cellspacing="0" cellpaddind="4" width="100%" style="max-width:600px;">';

$error = false; //Seteo que no hay error en un principio
$msg = ""; //Seteo que no hay mensaje de error

//Recorro lo recibido por el formulario, donde $k es el atributo "name", y $v es el valor
foreach ($_POST as $k => $v){
    $n = str_replace('_',' ', $k); //Si existe un guión bajo en el atributo "name", lo reemplazo por un espacio para efectos devolución de HTML en el correo
    if (in_array($k, $required) && $v=='') { //Compruebo que $k existe en el array $required, y si es así, que el valor $v no sea vacio
        $error = true; //Seteo que hay error
        $msg= '<p>Oops. Revisa los campos marcados</p>'; //Agrego en el mensaje el error del campo que está erróneo
    }
    //Info para el HTML del correo
    $data.='<tr>';
    $data.='<td class="label" style="border-bottom:1px solid gray; font-weight:bold; width:30%;">'.$n.':</td>'; //Muestro el nombre del campo
    $data.='<td class="value" style="border-bottom:1px solid gray; font-weight:normal; width:70%;">'.$v.'</td>'; //Muestro el valor del campo
    $data.='</tr>'.PHP_EOL;
}

$data.='</table>'; //Fin de mensaje de correo

if (!isset($_POST['Captcha']) || $_POST['Captcha']%2!=0) { //Compruebo que $k existe en el array $required, y si es así, que el valor $v no sea vacio
    $error = true; //Seteo que hay error
    $msg.= '<p>Captcha Incorrecto</p>'; //Agrego en el mensaje el error del campo que está erróneo
}

if (!$error){ //Si no existe error en los campos, envío el correo
    $mail = new PHPMailer; //Se crea el objeto y se setea sus variables

    $mail->IsSMTP();
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port       = 587;   
    $mail->Username   = "soporte@oxus.cl";  // GMAIL username
    $mail->Password   = "7ru2UmuF";
    
    
    $mail->IsHTML(true); //Seteo que imprimiré código HTML
   // $mail->IsMail();
    $mail->CharSet = "utf-8"; //Seteo el formato de caracteres

//    $mail->SetFrom("info@didigital.cl", "Contacto diDigital"); //Seteo el correo,nombre de quien lo envía
    $mail->SetFrom($_POST['Correo_contacto'], $_POST['Nombre_contacto']); //Seteo el correo,nombre de quien lo envía
    
    $mail->AddAddress($emailTo, 'Contacto diDigital'); //Coloco el nombre del destinatario
    $mail->Subject = $subject; //Asunto el correo
    $mail->Body = str_replace('{data}', $data, $body); //Reemplazo el string "{data}" por la varible $data en la variable $body
    $mail->AltBody = strip_tags($data); //Para lectores de correo que no permite HTML, elimino todas las etiquetas y queda el texto plano

    $error = !$mail->Send(); //Si no se puede enviar, seteo la variable

    if ($error) $msg='ERROR: '.$mail->ErrorInfo; //Si hay error, le muestro qué ocurrió
}

if ($error) {
    if (isset($_GET['mail'])){
        echo $msg;
    }else{
        echo json_encode(array('ok'=>false,'msg'=>$msg));        
    }
} else {
    if (isset($_GET['mail'])){
        echo 'Mensaje enviado exitosamente. Pronto nos comunicaremos con usted.';
    }else{
        echo json_encode(array('ok' => true));
    }
}
?>