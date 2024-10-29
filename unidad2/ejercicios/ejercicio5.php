<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <body style="background-color: #e0a0f2;">
        <?php 
        
        //Si esta definido el input, es decir, ya se ha enviado un numero , se ejecuta el codigo
        if(isset($_GET["input"])){
            $numero_obtenido = $_GET["input"];
            $intento = $_GET["intento"];
            $random = $_GET["random"];

            //Si no se han acabado los intentos se ejecuta
           if($intento>0){
            //Si ha acertado el numero, se imprime por pantalla.
                if($numero_obtenido==$random){
                    echo "Ganaste";
                }
                else {
                    //si ha fallado, se resta un intento
                    $intento--;
                    //Si el numero obtenido está a una posicion, se imprime lo siguiente
                    if($numero_obtenido-$random==1){
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
            echo "Se han acabado los intentos";
            echo "<button type=reset> Boton </button> ";
           }
        }
        //Si no, se inicializan los valores de intentos y random
        else{

            $intento=6;
            $random = rand(1,30);
        }

    
        ?>
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
            <img src="imagenes/ej5.png" width="210px">
            <div class="m-5 col-sm-8"> 
                <form method="get" action="ejercicio5.php">
                    <label for="input" style="font-family:'Times New Roman', Times, serif;font-size:x-large" class="form-label">Introduce un numero</label>
                    <input type="number" class="form-control" name="input" id="input" aria-describedby="helpId" placeholder="Numero.."/>
                    <input type="hidden" id="intento" name="intento" value="<?php echo $intento ?>">
                    <input type="hidden" id="random" name="random" value="<?php echo $random ?>">
                    <br>
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </body>
</html>