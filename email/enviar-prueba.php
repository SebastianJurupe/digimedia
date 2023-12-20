<?php
//############### Requerimientos ###############
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
//############### Requerimientos ###############

//############### Elementos a enviar ###############
/* $nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$archivo = $_FILES['adjunto']; */

if (isset($_POST['submit'])) {
$nombre = $_POST["name"];
$correo = $_POST["email"];
$telefono = $_POST["phone"];
$mensaje = "Homea";
$archivo = "../img/logo.png";
//############### Elementos a enviar ###############

//############### Formato a enviar ###############
/* $body= "Nombre: ". $nombre ."<br>Correo: ". $correo . "<br>Telefono: ". $telefono ."<br>Mensaje: ". $mensaje. "<br>Archivo: "; */
//############### Formato a enviar ###############


$mail = new PHPMailer(true);
$mail2 = new PHPMailer(true);
$mail3 = new PHPMailer(true);

//Server settings(Opciones del correo para Enviar Email)
$mail->SMTPDebug = 0;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'sebastianjurupe27@gmail.com';                     //SMTP username
$mail->Password   = 'sigievqqnbgocvje';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;
//TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Server settings(Opciones del correo para Enviar Email)
$mail2->SMTPDebug = 0;                      //Enable verbose debug output
$mail2->isSMTP();                                            //Send using SMTP
$mail2->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail2->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail2->Username   = 'sebastianjurupe27@gmail.com';                     //SMTP username
$mail2->Password   = 'sigievqqnbgocvje';                               //SMTP password
$mail2->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail2->Port       = 465;

//Server settings(Opciones del correo para Enviar Email)
$mail3->SMTPDebug = 0;                      //Enable verbose debug output
$mail3->isSMTP();                                            //Send using SMTP
$mail3->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail3->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail3->Username   = 'sebastianjurupe27@gmail.com';                     //SMTP username
$mail3->Password   = 'sigievqqnbgocvje';                               //SMTP password
$mail3->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail3->Port       = 465;

try {
              
    //Recipients
    $mail->setFrom($correo, $nombre);
    $mail->addAddress($correo);     //Add a receptor(Destinatario)
             
    /* sleep(600); */
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Bienvenida 01';
    $mail->Body    = "¡Hola! Gracias por tu interés en Digimedia. Somos una empresa de marketing digital especializada en servicios como SEO, redes sociales, publicidad online y más. Estamos encantados de ayudarte. Por favor, déjanos tu consulta y te responderemos a la brevedad posible. ¡Esperamos trabajar contigo pronto!".'<br><img src="cid:flyer1" width="50%" height="auto">';
    /* $mail->AddAttachment('../email/Botonimprimir.png'); *///     (Add file)
    $mail->AddEmbeddedImage('../img/Flyer 1.webp','flyer1','Flyer 1.webp');
    $mail->send();

    /* sleep(1800); */
    $mail2->setFrom($correo, $nombre);
    $mail2->addAddress($correo);
    //Content
    $mail2->isHTML(true);                                  //Set email format to HTML
    $mail2->Subject = 'Bienvenida 02';
    $mail2->Body    = "¡Hola! ¡Bienvenido al mundo de Digimedia! Somos un equipo apasionado por el marketing digital y estamos aquí para hacerte brillar en línea. ¿Tienes curiosidad sobre nuestros servicios? ¡No dudes en preguntar! Estamos listos para guiarte en el emocionante viaje de impulsar tu presencia digital. ¡Déjanos tu mensaje y comencemos esta aventura juntos!".'<br><img src="cid:flyer2" width="50%" height="auto">';
    /* $mail->AddAttachment('../email/Botonimprimir.png'); *///     (Add file)
    $mail2->AddEmbeddedImage('../img/Flyer 2.webp','flyer2','Flyer 2.webp');
    $mail2->send();         

    /* sleep(3600); */
    $mail3->setFrom($correo, $nombre);
    $mail3->addAddress($correo);
    //Content
    $mail3->isHTML(true);                                  //Set email format to HTML
    $mail3->Subject = 'Bienvenida 03';
    $mail3->Body    = "¡Bienvenido al mundo de Digimedia! Somos un equipo apasionado por el marketing digital y estamos aquí para hacerte brillar en línea. ¿Tienes curiosidad sobre nuestros servicios? ¡No dudes en preguntar! Estamos listos para guiarte en el emocionante viaje de impulsar tu presencia digital. ¡Déjanos tu mensaje y comencemos esta aventura juntos!".'<br><img src="cid:flyer3" width="50%" height="auto">';
    /* $mail->AddAttachment('../email/Botonimprimir.png'); *///     (Add file)
    $mail3->AddEmbeddedImage('../img/FLYER-03.webp','flyer3','Flyer 3.webp');
    $mail3->send();
} catch (Exception $e) {
    echo "Hubo un mensaje de error: {$mail->ErrorInfo}";
}
}
?>