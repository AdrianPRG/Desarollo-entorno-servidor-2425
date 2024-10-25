<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   
        <div class="m-5"> <label for="numero" class="form-label">Introduce un numero</label>
            <form method="get" action="ejercicio5.php">
                <input type="number" class="form-control" name="numero" id="numero" aria-describedby="helpId" placeholder="2,20,100,30,etc.."/>
                <input type="submit">
            </form>
        </div>
                <?php

                    $numero_aleatorio = random_int(1,2);
                    $numero_obtenido=null;
                    
                    if(isset($_GET["numero"])){
                        $numero_obtenido = $_GET["numero"];
                    }

                    if($numero_obtenido!=null){
                        if($numero_obtenido==$numero_aleatorio){
                            echo "Bien obtenido";
                        }
                        else{
                            echo "Mal obtenido";
                        }
                    }
                    else{
                        echo "introduce";
                    }

                ?>
</body>
</html>