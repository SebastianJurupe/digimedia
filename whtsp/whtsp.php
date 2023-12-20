<?php
    require_once('../whtsp/ultramsg.class.php'); // if you download ultramsg.class.php
    
    $token="4akheqndnhsearlw"; // Ultramsg.com token
    $instance_id="instance49499"; // Ultramsg.com instance id
    $client = new UltraMsg\WhatsAppApi($token,$instance_id);

    if (isset($_POST['submit'])) {
        for($i=1; $i<=1;$i++){
                $numero =trim($_POST['phone']);
                sleep(3);
                //Variables recibidas del formulario
                $nombre = $_POST["name"];
                $mensaje = "¡Hola! Gracias por tu interés en Digimedia. Somos una empresa de marketing digital especializada en servicios como SEO, redes sociales, publicidad online y más. Estamos encantados de ayudarte. Por favor, déjanos tu consulta y te responderemos a la brevedad posible. ¡Esperamos trabajar contigo pronto!";
                $links = "https://www.digimediamkt.com/img/Flyer%201.webp";
                //
        
                $to=$numero;
                $body= $mensaje."\n".$links;
                $api=$client->sendChatMessage($to,$body);
        
                header("Location: ds-web.php");
        }
        for($i=2; $i<=2;$i++){
            $numero =trim($_POST['phone']);
            sleep(6);
            //Variables recibidas del formulario
            $nombre = $_POST["name"];
            $mensaje = "¡Hola! ¡Bienvenido al mundo de Digimedia! Somos un equipo apasionado por el marketing digital y estamos aquí para hacerte brillar en línea. ¿Tienes curiosidad sobre nuestros servicios? ¡No dudes en preguntar! Estamos listos para guiarte en el emocionante viaje de impulsar tu presencia digital. ¡Déjanos tu mensaje y comencemos esta aventura juntos!";
            $links = "https://www.digimediamkt.com/img/Flyer%202.webp";
            //
    
            $to=$numero;
            $body= $mensaje."\n".$links;
            $api=$client->sendChatMessage($to,$body);
    
            header("Location: ds-web.php");
        }
        for($i=3; $i<=3;$i++){
            $numero =trim($_POST['phone']);
            sleep(9);
            //Variables recibidas del formulario
            $nombre = $_POST["name"];
            $mensaje = "¡Bienvenido al mundo de Digimedia! Somos un equipo apasionado por el marketing digital y estamos aquí para hacerte brillar en línea. ¿Tienes curiosidad sobre nuestros servicios? ¡No dudes en preguntar! Estamos listos para guiarte en el emocionante viaje de impulsar tu presencia digital. ¡Déjanos tu mensaje y comencemos esta aventura juntos!";
            $links = "https://www.digimediamkt.com/img/FLYER-03.webp";
            //
    
            $to=$numero;
            $body="Hola ".$nombre ."\n".$mensaje."\n".$links;
            $api=$client->sendChatMessage($to,$body);
    
            header("Location: ds-web.php");
        }
}
?>