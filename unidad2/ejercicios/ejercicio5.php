<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <body style="background-color: #e0a0f2;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
            <img src="imagenes/ej5.png" width="210px">
            <div class="m-5 col-sm-8"> <label for="numero" style="font-family:'Times New Roman', Times, serif;font-size:x-large" class="form-label">Introduce un numero</label>
                <form method="get" action="ejercicio5.php">
                    <input type="number" class="form-control" name="numero" id="numero" aria-describedby="helpId" placeholder="Numero.."/>
                    <input type="number" hidden value="6">
                    <br>
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

                    <?php

                        if(isset($_GET["numero"])){
                            $numero_obtenido = $_GET["numero"];
                        }

                    ?>
        </div>
    </body>
</html>