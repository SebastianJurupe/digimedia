<?php


  include '../conexion/conexion.php';

$id=$_POST['id'];
$sql = "DELETE FROM usuarios WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: http://localhost/Digimedia/admin/usuarios/index.php");
  } else {
    echo "Error al eliminar el usuario: " . $conn->error;
  }

?>