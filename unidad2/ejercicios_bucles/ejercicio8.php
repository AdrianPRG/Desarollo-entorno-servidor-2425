<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="mb-3">
            <form method="post">
                <label for="texto" class="form-label">Introduce los parametros</label> 
                <textarea class="form-control" name="texto" value="texto" id="texto" rows="4"></textarea>
                <input type="submit" class="btn btn-primary mt-3">
            </form> 
        </div>
    <?php

    if(isset($_POST["texto"])){
        crearGaleria($_POST["texto"]);
    }

    function crearGaleria($texto){
        //Guardará los valores de cada imagen
        $imagenes = [];
        //se divide las lineas 
        $lineas = explode("\n",$texto);
        //Contiene el estilo de la primera linea, del margen superior e izquierdo
        $estiloPrimeraLinea = explode("-",$lineas[0]);


        //Se añaden a un array las propiedades de la imagen

        for($x=1;$x<count($lineas);$x++){
            //Se dividen las propiedades por -, se dividiran asi: [0] => ancho [1] => alto [2] => tipo de borde + demas estilo [3] => ruta imagen
            $estilo = explode("-",$lineas[$x]);
            //Se guarda en el array Imagenes, si tiene mas de 4 elementos
            if(count($estilo)>=4){
                $imagenes[$x] = $estilo;
            }
        
        }

        //Div que contiene la galeria principal
        echo "<div style='display: flex; flex-wrap: wrap; gap: 20px; flex-direction: row;'>";

            foreach ($imagenes as $imagen) {
                // Se comprueba que haya dos valores en la primera línea para los márgenes, si no, no se aplicarán margenes
                if (count($estiloPrimeraLinea) > 1) {
                    $margenSuperior = $estiloPrimeraLinea[0];
                    $margenIzquierda = $estiloPrimeraLinea[1];
                }

                    // Verificamos que cada imagen tenga al menos 4 elementos (ancho,alto,borde e imagen)
                    // Separamos el estilo restante (borde, color, sombra)
                    $formateoEstilo = explode("#", $imagen[2]);

                    // Se aplica el margen supeior e izquierdo
                    //A su vez, se crea un contenedor con el ancho y alto introducido por el usuario
                    echo "<div style='margin-top: {$margenSuperior}px; margin-left: {$margenIzquierda}px; max-width: 500px; max-height: 400px; width: " . $imagen[0] . "px; height: " . $imagen[1] . "px; overflow: hidden; border: 1px solid #ccc; border-style: " . $formateoEstilo[0] . "; border-color: " . $formateoEstilo[1] . ";'>";
                    
                    //Mostramos la imagen que el usuario ha introducido
                    echo "<img src='../ejercicios_bucles/imagenes/" . trim($imagen[3]) . "' style='width: 100%; height: 100%; object-fit: cover;' alt='Imagen no disponible'>";
                    
                    echo "</div>";

            }

        echo "</div>";
        
    }

    ?>

</div>


</body>
</html>