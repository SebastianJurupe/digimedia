<?php
session_start();

include '../conexion/conexion.php';

$username = $_POST["usuario"];
$password = $_POST["contrasena"];

// Consulta para verificar las credenciales del usuario
$sql = "SELECT * FROM usuarios WHERE usuario = '$username' AND contrasena = '$password'";
$result = $conn->query($sql);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($result->num_rows > 0) {
        // Credenciales válidas, redireccionar al usuario a una página de bienvenida
        $_SESSION['usuario'] = $_POST['usuario'];
        header("Location: ../../intranet.php");
        exit();
    } else {
      

        // Credenciales inválidas, mostrar un mensaje de error
        header("Location:index.php?mensaje=Nombre de usuario o contraseña inválidos");
        //echo "Nombre de usuario o contraseña inválidos";
    }

}


    // Cerrar la conexión con la base de datos
    mysqli_close($conn);
?>