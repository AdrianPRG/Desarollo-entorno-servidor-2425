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
            max-width: 100%; 
            padding: 20px;
        }
    </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <form method="post" action="ejercicio4.php">
        <div class="mb-3">
            <label for="numero" class="form-label">Numero (1-10)</label>
            <br>
            <input type="range" min=1 max=10  class=" col-sm-4" name="numero" id="numero" />
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
        <input type="submit" class="btn btn-primary">
    </form>
    <?php
            
            if(isset($_POST["numero"]) && isset($_POST["texto"])){
                //se obtienen los valores del formulario
                $numero = $_POST["numero"];
                $listaCadenas = explode("\n",trim($_POST["texto"]));
                $media = isset($_POST["Media"]) ? true : false;
                $factorial = isset($_POST["factorial"]) ? true : false;
                $resultados = [];

                //Se guarda cada valor dependiendo de si el indice existe o no, para ello se utiliza ternarios con isset

                $resultados["SumadeEnteros"] = sumaenteros($listaCadenas[0]);
                $resultados["SumadeFloats"] = isset($listaCadenas[1]) ? sumaDeFloats($listaCadenas[1]) : "No calculado";
                $resultados["SumadeTodos"] = isset($listaCadenas[1]) ? SumaDeNumeros($listaCadenas) : "No calculado";
                $resultados["PalabraMasLarga"] = isset($listaCadenas[2]) ? palabraMasLarga($listaCadenas[2]) : "No calculado";
                $resultados["Media"] =  ($media==true) ? calcularMedia($listaCadenas) : "No marcado en checkbox";
                $resultados["Factorial"] =  ($factorial==true) ? factorialNumero($numero) : "No marcado en checkbox";

                 echo "<table class='table'>";

                foreach($resultados as $clave => $valor){
                    
                    //Se imprime cada clave con su valor

                    echo " <tr>
                                <th> {$clave} </th>
                                <td> {$valor} </td>
                            </tr>";
                }

                echo "</table>";
            }
    ?>
    <form>
        <!--Para resetear el formulario -->
        <input type="submit" class="btn btn-warning" value="Reset">
    </form>
</div>
</body>
</html>