<?php
declare(strict_types=1);
include "./lib/funciones.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
    function Maximo(){
        //La funcion getargs permite obtener un array de parametros de una funcion en la que no se ha 
        //Especificado los parametros posibles a introducir.


        $max = PHP_INT_MIN;

        $parametros = func_get_args();


        for($i=0;$i<count($parametros);$i++){
            if($parametros[$i]>=$max){
                $max=(int)$parametros[$i];
            }
        }
        echo "El numero mayor es " . $max ."<br>";
    }

    //Include mete el archivo y lo busca a ver si existe, no peta si no existe
    //Requiere peta si el archivo no existe.

    Maximo(200,300,30,2000,900000);

    buenastardes(buenastardes:"Adrian");

    ?>
</body>
</html>