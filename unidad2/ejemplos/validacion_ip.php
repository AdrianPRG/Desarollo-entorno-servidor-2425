<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $ip = "1.168.29.1";
    //Presuponemo que el formato es correcto, iremos comprobando si hay algun fallo
    $formato_correcto = true;
    $numeros_ip = explode(".",$ip);


    //Si la cantidad de numeros de la ip es distinta a 4, formato incorrecto
    //Con count se puede saber la cantidad de elementos del array

    if(count($numeros_ip)!=4){
        echo "La ip no tiene formato correcto (Menos de 4 numeros)";
        $formato_correcto=false;
    }


    //En php el bucle for each primero se pone la lista y luego en el as el iterador

   /* for ($i=0;$i<count($numeros_ip);$i++){

    } */

    foreach ($numeros_ip as $numero){
        if(!ctype_digit($numero)){
         echo "La ip no tiene formato correcto (Algunos de los componentes no es numerico)";
        $formato_correcto=false;
        break;
        }
        else{
            if((int)$numero<0 || (int)$numero>255){
                echo "La ip no tiene formato correcto (Superior a rango)";
                $formato_correcto=false;
                break;
            }
            else{
                if(strlen($numero)>1 && $numero[0] == "0"){
                    echo "La ip no tiene formato correcto, no puede tener mas de dos caracteres y empezar por 0";
                    $formato_correcto=false;
                    break;
                }
            }
        }
    }

    if ($numeros_ip[0]==0 || $numeros_ip[0]==255 || $numeros_ip[3]==0 || $numeros_ip[3]==255){
        echo "Ip con formato incorrecto, el primero ni en el ultimo debe ser menor a 0 y mayor a 255";
        $formato_correcto=false;
    }
    
    if($formato_correcto){
        echo "IP VALIDA";
    }

    ?>
    
</body>
</html>