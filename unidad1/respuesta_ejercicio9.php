<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $nif = $_GET["nif"];
    $tlf = $_GET["tlf"];
    $estado = $_GET["estado"];
    $vcl = $_GET["vcl"];

    echo "El usuario con $nif responde al $tlf, es $estado y viaja en $vcl"

    ?>

<button style="margin-top:20px"><a href="Ejercicio9PHP_Unidad2.php">Volver a menu</a> </button>
</body>
</html>