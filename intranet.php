<?php
session_start();

if (!isset($_SESSION['usuario'])) {
  // Usuario no autenticado, redirigir a la página de inicio de sesión
  header('Location: admin/login/index.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>.:: DigiMedia ::.</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="css/stylos.css?48588">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!--    Scripts -->
 
  <style>
    .btnsx {
      background-color: red;
      border: none;
      color: white;
      padding: 6px;
      width: 40px;
      border-radius: 6px;
      margin-left: 10px;

    }

    .señ {

      background-color: greenyellow;
      padding: 5px;
      border-radius: 20px;
      font-size: 11px;
      color: black;
      font-weight: bold;

    }

    .at {
      background-color: red;
      padding: 5px;
      border-radius: 20px;
      font-size: 11px;
      color: white;
      font-weight: bold;
    }
  </style>

</head>

<body style="background: linear-gradient(to right,  rgb(197, 0, 223),rgb(0, 132, 255));">
  <div display="flex" justify-content="center">
    <br>
    <h1 class="text-center">Contactos Lista</h1>
    <center>
      <div class="cen">
        <a type="button" class="btn btn-primary " href="admin/cerrar.php" id="cer">Cerrar Sesion</a>
        <a type="button" class="btn btn-primary" href="admin/usuarios/index.php">Lista Usuarios</a>

      </div>
    </center>


    <br>

    <div class="table-responsive px-5 " id="sx">

      <table class="table table-striped table-bordered" id="miTabla">
        <?php
        # si hay un mensaje, mostrarlo
        if (isset($_GET["mensaje"])) { ?>
          <div class="alert alert-primary des" role="alert">
            <?php echo $_GET["mensaje"] ?>
          </div>
        <?php } ?>

        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">EMAIL</th>
            <th scope="col">SERVICIO</th>
            <th scope="col">NUMERO</th>
            <th scope="col">MENSAJE</th>
            <th scope="col">EMAIL MARK</th>
            <th scope="col">NEW</th>
            <th scope="col">PRODUCTION</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">ESTADO</th>
            <th scope="col">ACCION</th>
          </tr>
        </thead>
        <tbody>

          <?php
          // Datos para la conexión
          $server = 'localhost';
          $user = 'root';
          $pass = '';
          $db = 'digimedia';

          // Conexión a bd - MySQL
          $conn = mysqli_connect($server, $user, $pass, $db);





          $query = mysqli_query($conn, "SELECT * FROM contactanos  ORDER BY estado DESC; ");

          mysqli_close($conn);

          $result = mysqli_num_rows($query);
          if ($result > 0) {

            while ($data = mysqli_fetch_array($query)) {
              if ($data['estado'] == 1) {
                $estado = '<span class="señ">Pendiente</span>';
              } else {
                $estado = '<span class="at">Atendido</span>';
              }
          ?>
              <tr>

                <td scope="row"><?php echo $data['id'] ?></td>
                <td id="sx"><?php echo $data['nombre'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['servicio'] ?></td>
                <td><?php echo $data['numero'] ?></td>
                <td><?php echo $data['mensaje'] ?></td>
                <td><?php echo $data['emailMarck'] ?></td>
                <td><?php echo $data['new'] ?></td>
                <td><?php echo $data['production'] ?></td>
                <td><?php echo $data['fecha'] ?></td>
                <td><?php echo $data['hora'] ?></td>

                <!--<td style="text-align: center" id="sx">
                            <form action="View/atendido.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('&iquest Esta seguro de que desea dar por atendido?');">Atendido</button>
                            </form>
                        </td>-->
                <td><?php echo $estado ?></td>
                <?php if ($data['estado'] == 1) { ?>
                  <td>
                    <form action="View/atendido.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                      <button type="submit" class="btnsx pendiente " onclick="return confirm('&iquest Esta seguro de que desea dar por atendido?');"><i class="fa-solid fa-trash"></i></button>
                    </form>
                  </td>
                <?php } ?>
              </tr>
          <?php
            }
          } ?>
        </tbody>
      </table>

    </div>
    <center>
      <div class="cen">
        <button class="btn btn-success" onclick="exportToExcel()"><i class="fa-solid fa-file-excel fa-beat"></i></button>
        <button class="btn btn-danger" id="pdfout"><i class="fa-solid fa-file-pdf fa-beat"></i></button>
        <button class="btn btn-primary" onclick="imprimirParteDePagina()"><i class="fa-solid fa-print fa-beat"></i></button>
      </div>
    </center>

    </main>
  </div>

</body>
<script src="js/export.js"></script>
<script src="js/pdf.js"></script>
<script src="js/impresion.js"></script>

<script>
  /* var bton=document.getElementsByClassName("pendiente");
   
    
    
    for (var i = 0; i < bton.length ; i++) {
        console.log(i)
        
       
        bton[i].onclick = function() {
          this.style.backgroundColor = "orange";
          this.innerText="Atendido";
          
         
        };
        
      
        
    }*/
</script>

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    setTimeout(function() {
      $(".des").fadeOut(1500);
    }, 6000);
  });
</script>

</html>