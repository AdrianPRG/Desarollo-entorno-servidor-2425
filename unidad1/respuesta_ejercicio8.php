<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RespuestaNumeros</title>
</head>
    <body>
        <div class="mt-5">
                    <?php
                        $numero1 = $_GET["numero1"];
                        $numero2 = $_GET["numero2"];

                        if ($numero1!=null && $numero2!=null){
                            echo "Numero 1 es " . ((int) $numero1);
                            echo "<br/> Numero 2 es " . round($numero2);
                        }
                        else{
                            echo "Los campos no deben estar vacios";
                        }
                    ?>
        </div>
        <button style="margin-top:20px">
            <a href="Ejercicio8PHP_Unidad2.php">Volver a la pagina principal</a>
        </button>
    </body>
</html>