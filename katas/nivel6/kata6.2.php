<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function toCamelCase($str){
            //Se separa mediante lo especificado, que puede ser guiones bajos o guiones
            $cadenaseparada = preg_split("/[-_]/",$str);
            //Cadena final que contendra la cadena en CamelCase
            $cadenaFinal = "";

            for($x=0;$x<count($cadenaseparada);$x++){
                if($x==0){
                    if($cadenaseparada[0][0] != strtoupper($cadenaseparada[0][0])){
                        $cadenaActual = $cadenaseparada[0];
                    }
                    else $cadenaActual = strtoupper($cadenaseparada[0][0]) . substr($cadenaseparada[0],1);
                }
                else{
                    //Se guarda en la cadena actual la primera letra mayuscula y el resto de la cadena en minuscual
                    $cadenaActual = strtoupper($cadenaseparada[$x][0]) . substr($cadenaseparada[$x],1);
                    //Se añade a la cadena final la cadena actual
                }
                $cadenaFinal = $cadenaFinal . $cadenaActual;
            }

            return $cadenaFinal;

        }

        echo(toCamelCase("hola-adrian-Quetal"));

    ?>
</body>
</html>