<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="enviar-prueba.php" method="post" enctype="multipart/form-data">
        <label for="">Nombre:</label>
        <input type="text" name="nombre">
        <label for="">Correo:</label>
        <input type="text" name="correo">
        <label for="">Telefono:</label>
        <input type="text" name="telefono">
        <label for="">Mensaje</label>
        <textarea name="mensaje" id="" cols="100" rows="10"></textarea>
        <br>
        <label for="exampleInputFile">Adjuntar archivo</label>
        <input type="file" name="adjunto" id="archivo-adjunto">
        <br>
        <input type="submit" value="Enviar">

        
    </form>
</body>
</html>