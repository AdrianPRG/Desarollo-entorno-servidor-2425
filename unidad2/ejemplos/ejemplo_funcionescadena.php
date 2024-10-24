<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $nombre = "Juanjo";
    $nota = 8.89;
    //%s para donde irá una cadena, será el primer argumento
    //$f para donde ire el float, sera el segundo argumento
    $texto = sprintf("%s tiene una nota jamon y 2 jamon de %.2f <br/> ",$nombre,$nota);
    echo $texto;

    //substr me devuelve una porcion de la cadena, NO MODIFICA la cadena original
    //Parametros --> texto que se hara substring, posicion inicial, cantidad de caracteres
    //$texto = substr($texto,20,10)


    //str_replace remplaza las cadenas indicadas por otras
    //Parametros --> 1 texto a remplazar, 2 texto nuevo , 3 cadena en la que se haran los cambios, 4 opcional) cantidad de veces que se ha remplazado una cadena
    $cantidad=0;
    echo str_replace("jamon","chorizo",$texto,$cantidad);
    echo $cantidad;


    //chr me dice el caracter de la posicion indicada del codigo ASCII
    //print chr(212);

    //trim sirve para quitar los espacios, rtrim quita espacios derecha, ltrim los espacios de la izquierda
    //print trim($texto);

    //str_pad sirve para rellenar cadenas con huecos
    //parametros 1 la cadena, 2 hasta donde tiene que llegar, 3 co que se rellena
    // print str_pad("hola buenas",23,"....")

    //strcmp compara cadenas --> 0 iguales, <0 si a<b >0 si a>b

    //strncmp compara los N primeros caracteres

    //strpos busca en una cadena y devuelve la posicion de la primera ocurrencia
    //strrpost busca, devuelve la pposicion de la ultima ocurrencia.

    $texto3= "piña tenia yo una piña muy amarilla y otro una piña muy piña, que resulto una piña verde";

    function posicion_x_ocurrencia($texto,$palabra,$numeroocurrencia){
        //ponemos a -1 la primera posiicon para que pueda encontrar una palabra que se encuentra n el principio

        $pos = -1   ;
        //Vamos a usar contador para contar la cantidad de palabras encontradas
        $contador = 0;
        while($contador<$numeroocurrencia){
           $pos = strpos($texto,"piña",$pos+1);
           //si no encuentra la palabra, indica que no hay hasta esa ocurrencia repeticion
           if ($pos === false) return -1;
           //incrementamos la cantidad de ocurrencias encontrado
           $contador++;
        }
        
        //devolvemos la posicion de la piña piña
        return $pos;
    }

    echo posicion_x_ocurrencia($texto3,"piña",1);

    ?>
</body>
</html>
