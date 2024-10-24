<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos Arrays</title>
</head>
<body>
    <?php

    //En php, los arrays tienen tamaño dinamico, le podemos añadyr elementos sin problemas,
    //Puede combinar datos de distinto tipo, incluido arrays
    $alumno = array("Jose",23,false,6.78,["Pepito",23,11500]);
    //Para acceder a los elementos utilizamos el operador []
    //Si dentro de un array hay otro, y queremos acceder al array interno, utilizamos primero la posicion del
    //array interno, y luego lo que queremos sacar del array interno, ejemplo
    //acedemos a la array interna (posicion 4) y el elemento que queremos sacar
    echo $alumno[4][2];
    print_r($alumno);

    
    


    ?>
    
</body>
</html>