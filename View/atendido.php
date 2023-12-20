<?php
  //fecha actual
  $currentDate = date('Y-m-d');
  $currentDate2 = date('Y-m-d');

  //fecha limite de la eliminacion
  $enDate=date('Y-m-d',strtotime('+15 days'));
  // Datos para la conexión
  $server = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'digimedia';

  // Conexión a bd - MySQL
  $conn = mysqli_connect($server, $user, $pass, $db);

  $id = $_POST['id'];
  $sql="UPDATE contactanos set estado=0 WHERE id=$id";
  
  
  if ($conn->query($sql) === TRUE) {
    //header("Location: ../intranet.php");
    for ($i=0; $i < 15; $i++) { 
      $segundo_connsulta = "DELETE FROM contactanos  WHERE fecha='$currentDate'" ;
      if ($conn->query($segundo_connsulta) === TRUE) {
        
        header("Location: ../intranet.php?mensaje=Se dio por atendido con exito  se elimanará despues de 15 dias apartir de hoy.");
        //echo "Eliminación exitosa para la fecha: " . $currentDate . "<br>";
      } else {
        echo "Error al eliminar datos para la fecha: " . $currentDate . ". Error: " . $conn->error . "<br>";
      }
      // Incrementar la fecha actual
       $currentDate = date('Y-m-d', strtotime($currentDate . ' +1 day'));
    }
  } else {
    echo "Error a cambiar  el estado : " . $conn->error;
  }


