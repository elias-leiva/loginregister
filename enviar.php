<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar</title>
</head>
<body>
   <?php
        echo $_POST['nombre'];
        echo $_POST['apellido'];
        echo $_POST ['usuario'];
        echo $_POST ['e-mail'];
        echo $_POST ['contraseña'];
        echo $_POST ['rep-contraseña'];
   ?>
</body>
</html>