<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <body style="background-color: #e0a0f2;">
        <?php 
        
        //Si esta definido el input, es decir, ya se ha enviado un numero , se ejecuta el codigo
        if(isset($_GET["input"]) && isset($_GET["intento"]) && isset($_GET["random"])){
            $numero_obtenido = $_GET["input"];
            $intento = $_GET["intento"];
            $random = $_GET["random"];

            //Si no se han acabado los intentos, el usuario puede permitir insertar numeros
           if($intento>1){
            //Si ha acertado el numero, se imprime por pantalla.
                if($numero_obtenido==$random){
                    echo "ganaste"; 
                }
                else {
                    //Si ha fallado, se resta un intento
                    $intento--;
                    //Si el numero obtenido está a cinco posiciones, se imprime lo siguiente
                    if(abs($numero_obtenido-$random)<=5 || abs($random-$numero_obtenido)<=5){
                        echo "Calentito Totalis!";
                    }
                    //Si esta a mayor posicion, se calcula si es mayor a el o menor
                    else{
                        if($numero_obtenido>$random){
                            echo "No es el resultado, es mayor al valor";
                        }
                        else if ($numero_obtenido<$random){
                            echo "No es el resultado, es menor al valor";
                        }
                    }
                }
           }
           else{
            $texto = "Te has quedado sin intentos";
           }
        }
        //Si no, se inicializan los valores de intentos y random
        else{
            $texto="";
            $intento=6;
            $random = rand(1,30);
        }
    
        ?>
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
            <img src="imagenes/ej5.png" width="210px">
            <div class="m-5 col-sm-8"> 
                <form method="get" action="ejercicio5.php">
                    <label for="input" style="font-family:'Times New Roman', Times, serif;font-size:x-large" class="form-label">Introduce un numero</label>
                    <input type="number" required class="form-control" name="input" id="input" aria-describedby="helpId" placeholder="Numero.."/>
                    <input type="text" readonly class="form-control" name="txt" id="txt">
                    <b> <?php ($intento>=1) ? print "Numero de intentos " . $intento : print "Se han acabado los intentos"  ?></b>
                    <input type="hidden" id="intento" name="intento" value="<?php echo $intento ?>">
                    <input id="random" name="random" value="<?php echo $random ?>">
                    <br>
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </body>
</html>