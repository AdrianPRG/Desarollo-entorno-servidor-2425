<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta ejercicio 5</title>
</head>
<body>
    <?php
        $maximo=0;
        $media=0;
        $personamasalta="";
        for($i=1;$i<6;$i++){
            $persona = $_GET["nombre$i"];
            $altura = $_GET["altura$i"];
            if($altura>=$maximo){
                $maximo=$altura;
                $personamasalta=$persona;
            }
            $media+=$altura;
        }

        echo "La altura maxima es $maximo y la perona mas alta es $personamasalta";
        echo "<br/> La media es " . number_format(($media/5),2) ;

    ?>
</body>
</html>