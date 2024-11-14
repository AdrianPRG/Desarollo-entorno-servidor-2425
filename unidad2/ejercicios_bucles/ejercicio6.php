<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
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
        <form method="post">
            <div class="mb-3">
                <label for="" class="form-label">Numeros</label>
                <input required type="text" class="form-control" name="numeros" id="numeros" aria-describedby="helpId" placeholder="29 98 17 95" />
                <small id="helpId" class="form-text text-muted">Introduce numeros</small>
            </div>
            <div class="form-check ">
                    <input class="form-check-input" type="checkbox" value="true" name="ordenado" id="ordenado" />
                    <label class="form-check-label" for=""> Ordenado </label>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
        <?php
        
            if(isset($_POST["numeros"])){
                $textoNumeros = explode(" ",$_POST["numeros"]);
                $ordenado = $_POST["ordenado"];
                $arrayResultados=[];

                if (empty($textoNumeros)==false){
                    $nprimo=0;
                    $media=0;
                    $minimo = PHP_INT_MAX;
                    $textoNumeros = explode(" ",$_POST["numeros"]);
                    foreach($textoNumeros as $numero){
                        if(EsPrimo($numero)){
                            $nprimo++;
                        }
                        if($numero<$minimo){
                            $minimo=$numero ;
                        }
                        $media+=$numero;
                    }
                    $arrayResultados["minimo"]=$minimo;
                    $arrayResultados["Primos"]=$nprimo;
                    $arrayResultados["media"]=$media/count($textoNumeros);

                   if($ordenado=="true"){
                    echo "Cantidad de numeros primos : " . $arrayResultados["Primos"] . ", la media es " . $arrayResultados["media"] . " y el numero minimo " . $arrayResultados["minimo"];
                   }
                   else  echo "El minimo es " . $arrayResultados["minimo"] . ", la media es " . $arrayResultados["media"] . " y los numeros primos " . $arrayResultados["Primos"];
                
            }
        }

            function EsPrimo($num){
                $primo=true;
                if($num%1==0 && $num%$num==0 && $num>1){
                    for($x=1;$x<$num;$x++){
                        if($x==1 || $x==$num){
                            continue;
                        }
                        else{
                            if($num%$x==0){
                                $primo=false;
                                break;
                            }
                        }
                    }
                    return $primo;
                }
                else return false;
            }

        ?>
    </div>
</body>
</html>