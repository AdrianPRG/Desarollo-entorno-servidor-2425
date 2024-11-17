<?php
include "lib/funciones.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            background-color: aliceblue;
            max-width: 100%; /* Limita el ancho del contenedor */
            padding: 20px;
        }
    </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <form method="post" action="ejercicio4.php">
        <div class="mb-3">
            <label for="numero" class="form-label">Numero</label>
            <input type="number" min=1 max=10 class="form-control col-sm-4" name="numero" id="numero" placeholder="Introduce un numero" />
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Media" value="Media" id="Media" />
            <label class="form-check-label" for="Media"> Media </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="aritmetica" value="aritmetica" id="aritmetica" />
            <label class="form-check-label" for="aritmetica"> Sucesion Aritmetica </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="factorial" value="factorial" id="factorial" />
            <label class="form-check-label" for="factorial"> Factorial </label>
        </div>

        <div class="mb-3">
            <label for="textarea" class="form-label">Lineas </label>
            <textarea class="form-control" name="texto" value="texto" id="texto" rows="3"></textarea>
        </div>
        <input type="submit">
    </form>
    <?php
            
            //El isset de media,aritmetica y factorial no se pone, ya que si no estan marcados
            //No se enviará, y puede causar que nunca se entre en este 
            
            if(isset($_POST["numero"]) && isset($_POST["texto"])){
                $listaCadenas = explode("\n",trim($_POST["texto"]));
                $media = isset($_POST["Media"]) ? true : false;
                $factorial = isset($_POST["factorial"]) ? true : false;

                switch(count($listaCadenas)){
                    case 1:
                        print("La suma de los numeros enteros es " . sumaenteros($listaCadenas[0]) . "</br>");
                        break;
                    case 2:
                        print("La suma de los numeros enteros es " . sumaenteros($listaCadenas[0]) . " <br> La suma de los numeros float es " . sumaDeFloats($listaCadenas[1]) . "</br>");
                        break;
                    case 3:
                        print("La suma de los numeros enteros es " . sumaenteros($listaCadenas[0]) . " <br> La suma de los numeros float es " . sumaDeFloats($listaCadenas[1]) . " <br> La suma total de numeros es " . SumaDeNumeros($listaCadenas[0],$listaCadenas[1],$media,$factorial)[0] . "</br>");
                        print("La palabra mas larga  " . palabraMasLarga($listaCadenas[2]) . "</br>");
                        break;
                }
            }


    ?>
</div>
</body>
</html>