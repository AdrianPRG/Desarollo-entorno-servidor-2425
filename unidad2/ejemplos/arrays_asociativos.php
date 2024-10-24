<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Asociativos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <?php
    $media=0;
    $jose = ["nombre" => "Jose","edad" => 23, "repetidor" => false, "notaM" => 6.78, "direccion" => ["calle" => "Pepito","numero" => 23,"cp" => 11500]]; 
    $pedro = ["nombre" => "pedro","edad" => 17, "repetidor" => true, "notaM" => 4.78, "direccion" => ["calle" => "siono","numero" => 13,"cp" => 11501]]; 
    $adri = ["nombre" => "adri","edad" => 20, "repetidor" => false, "notaM" => 8, "direccion" => ["calle" => "Shiganshina","numero" => 19,"cp" => 11500]]; 

    echo ($jose["direccion"]["cp"]);

    for ($i=0; $i < 20 ; $i++) { 
        $alumnos[$i]["nombre"] = "Alumno" . $i;
        $alumnos[$i]["edad"] = rand(1,100);
        $alumnos[$i]["notaM"] = rand(1.0,10.0);
        $alumnos[$i]["repetidor"] = rand(1,6)>1?"false":"true";

    }

    print_r($alumnos[1]);

    foreach ($alumnos as $alumno) {
        
        //Acceder a la claves de los alumnos por separado
        foreach($alumno as $clave=>$valor){

            //Ejemplo si quieres sacar claves solo de cierto tipo
            if($clave=="nombre"){
                print("<br>".$valor);
            }
        }

    }
    ?>
</body>
</html>