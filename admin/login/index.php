<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>.:: DigiMedia ::.</title>
  <link rel="shortcut icon" href="../../img/logo.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css-admin/admin.css">
</head>

<body>

  <body>
    <!--URL => http://localhost/Digimedia/admin/login/index.php-->
    <div class="container-principal">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
              <div class="card-img-left d-none d-md-flex">
                <!-- Background image for card set in CSS! -->
              </div>
              <div class="card-body">
                <h5 class="card-title">Iniciar Sesión</h5>
                <center><img class="image-logo" src="../../img/logo.png" /></center>
                <form action="ingresar.php" method="post">
                  <?php
                  # si hay un mensaje, mostrarlo
                  if (isset($_GET["mensaje"])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show des" role="alert">
                      <?php echo $_GET["mensaje"] ?>
                    </div>
                  <?php } ?>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario"   required autofocus>
                    <label for="usuario">USUARIO</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="contrasena" name="contrasena"   placeholder="Contraseña" required>
                    <label for="password">CONTRASEÑA</label>
                  </div>

                  <div class="d-grid mb-2">
                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase"   type="submit">Iniciar Sesion</button>
                  </div>

                  <hr class="my-4">

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="image-reference">
        <img src="../../img/chica-blnaco-y-negor-01.svg" alt="Personas trabajando">
      </div>
    </div>
    


  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      setTimeout(function() {
        $(".des").fadeOut(1500);
      }, 3000);
    });
  </script>

</html>