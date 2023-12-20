<?php 
include '../admin/conexion/conexion.php';

$nom=$_POST['nombre'];
$em=$_POST['email'];
$ser=$_POST['servicio'];
$num=$_POST['numero'];
$men=$_POST['mensaje'];
$emM=$_POST['emailMarck'];
$new=$_POST['new'];
$pro=$_POST['production'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$sql = "INSERT INTO `contactanos` (`nombre`, `email`, `servicio`, `numero`, `mensaje`, `emailMarck`, `new`, `production`,`fecha`,`hora`,`estado`) 
        VALUES ('$nom', '$em', '$ser', '$num', '$men', '$emM', '$new', '$pro','$fecha','$hora','1')";
$resultado = mysqli_query($conn, $sql);


     // Comprobar si los datos se han insertado correctamente
    if ($resultado) {
        
        header("Location: contacto.php?mensaje=Envio exictoso gracias por su preferencia");
        exit;

    } else {
        echo "Ha habido un error al insertar los datos: " . mysqli_error($conn);
        exit;
    }



// Cerrar la conexión con la base de datos
mysqli_close($conn);
?>  
