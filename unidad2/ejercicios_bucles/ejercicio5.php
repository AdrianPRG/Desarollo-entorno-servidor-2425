<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="width: 100%; flex-direction: column; align-items: center; display: flex; background-color: aliceblue">
    <div style="width: 80%; max-width: 600px; align-items: center; background-color: beige; min-height: 10vh; display: flex; flex-direction: column; padding: 20px; box-sizing: border-box;border-radius:20px">
        <form method="post" style="display: flex; flex-direction: column;align-items: center;">
            <h4>Ejercicio 5 - ALG</h4>
            <label for="nombre" class="form-label mt-3 mb-3">Nombre</label>
            <input required style="width: 100%;" type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Adrian, Luis, Carlos..."/>
            <input type="submit" class="mt-3 btn btn-primary">
        </form>
        <form>
            <input class="mt-2 btn btn-warning" type="submit" value="reset">
        </form>
        <?php

    //Variables que contendran las letras
    $letras=0;
    $consonantes=0;

    //La lista de consonantes
    $listaConsonantes = ["a","b", "c", "d", "e","f", "g", "h","i", "j", "k", "l", "m", "n", "ñ", "p","o", "q", "r", "s", "t","u", "v", "w", "x", "y", "z"];
    
    //Se comprueba si se ha mandado un valor "nombre"
    if(isset($_POST["nombre"])){
        //Si nombre es nulo, se imprime el siguiente mensaje
        
            //Se utiliza la funcion explode, para que divida el string segun espacios, y se quitan los espacios de derecha e izquierda
            $nombre = explode(" ",trim($_POST["nombre"]));
            //Para cada palabra en la cadena[] nombre:
            for($x=0;$x<count($nombre);$x++){   
                echo "Palabra -> " . $nombre[$x] . "<br>";
                //Para cada letra de la palabra
                for($i=0;$i<strlen($nombre[$x]);$i++){
                    //Si la letra actual se encuentra en la lista, ya sea en mayusculas o minusculas, se suma 1 a los consonantes
                    if(in_array($nombre[$x][$i],$listaConsonantes) || in_array(strtolower($nombre[$x][$i]),$listaConsonantes)){
                        $consonantes++;
                    }
                    //Se suma 1 por cada letra
                    $letras++;
                }
                //Se imprimen y se restablecen los valores
                echo "Consonantes -> " . $consonantes . " | Letras -> " . $letras . "<br>";
                $consonantes=0;
                $letras=0;
            }
    
    }
    ?>
</body>
    </div>
</html>