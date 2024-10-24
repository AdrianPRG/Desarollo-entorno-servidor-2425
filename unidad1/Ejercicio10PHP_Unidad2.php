<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <body>
        <div class="container-lg align-items-start">
            <form method="get" action="respuesta_ejercicio10.php">
                <div class="mb-3 col-sm-5">
                    <?php
                    for($x=1;$x<6;$x++){
                        echo "<label style='font-weight: 700;' for='nombre$x' class='form-label'>Nombre de persona $x</label>";
                        echo "<label style='font-weight: 700;margin-left:40px' for='altura$x' class='form-label'>Altura de persona $x</label>";
                        echo "<div style='display:flex'>";
                        echo "<input type='text' placeholder='Escribe el nombre' required class='form-control' name='nombre$x' id='nombre$x'>";
                        echo "<input style='margin-left:20px' type='number' step='.01' placeholder='Escribe la altura' required class='form-control' name='altura$x' id='altura$x'>";
                        echo "</div>";
                        echo "<hr/ style='color:black'>";
                    }
                    ?>
                </div>
                <button type="submit">Enviar datos</button>
            </form>
        </div>
    </body>
</html>