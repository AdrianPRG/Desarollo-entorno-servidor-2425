<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    #Este fichero recibe un formulario html con dos datos, una palabra con type text 
    #,un texto de varia lineas con un text area y un checkbox que diga si ignora o no mayuscuñas
    #el programa contara la cantidad de palabras totales, la cantidad de palabras que sean palindromo
    #la cantidad de veces que esta la palabra que se recibe , la cantidad de lineas y la cntidad de frases
    #cada frase tiene punto al final, se devolverá en un array asociativo con todos los valores resultados
   
    //Comprobamos que existe el dato que queremos obtener
    if(isset($_POST["palabra"])){
        $palabra_buscar = $_POST["palabra"];
    } 
    if(isset($_POST["texto"])){
        $texto = $_POST["texto"];
    }

    //var temporal de cada palabras de una linea
    $num_palabrabuscar=0;
    //Numero de palabras totales en el fichero
    $num_palabras = 0;
    //numero totales de frases
    $num_frases = 0;

    $num_palindromo=0;
    //total de palabras
    //Separamos lineas
    $lineas = explode("\n",$texto);
    //Separamos palabras
    
    //Separamos palabras
    foreach ($lineas as $linea) {
        //Para contar la cantidad de puntos hago un explode de cada linea
        //Si el array resultante solo tiene un elemento, indica que no hay nongun elemento
        //Si hay por ejemplo 3 puntos, el array tendra 4 elementos.
        //Restando uno al explode me dará la cantidad de . que hay en la frase, ya que si hay un punto al final del todo me cuenta otro espacio
        //saldria en el count 2 aunque 
        $num_frases += count(explode(".",$linea))-1;

        $palabras= explode(" ", $linea);

        foreach ($palabras as $palabra) {
            $num_palabras++;
        }


    }

    foreach ($palabras as $word) {

        $palabra = trim($palabra);
        echo $palabra . "<br>";

        if($word==$palabra_buscar){
            $num_palabrabuscar++;
        }

        
        
        if(esPalindromo($word)==true){
            $num_palindromo++;
            echo $palabra . "es palindrom";
        }

    }

    function esPalindromo($palabra){

        //Tendremos que recorrer la cadena hasta la mitad solo, si es impar, hasta la mita d-1
        //al convertir a entero hacemos que siendo impar sea menos uno
        //es ecir si tiene 5 carayeres la mitad es 2.5 al truncar convirtiendo a entero
        //se queda en 2
        $mitad=(int)strlen($palabra)/2;

        //Por defecto es true, en el momento en el que no 
        
        //recorremos todas las letrs y comprobamos que son igules a sus simetrics
        for ($i=0; $i<= $mitad ; $i++) { 
            //Comparamos letra a letra la posicion actual del indice i con
            //su inversa, que sera la ultima posicion de la cadena (strlen -1) menos la i
            if($palabra[$i]!=$palabra[strlen($palabra)-1-$i]);
            return false;
        }

        //Si llega al final del bucle sin salir significa que todas sus letras son iguales.
        return true;
    }



    //Asignamos numero de lineas
    $resultado["numlineas"] = count($lineas);
    //Asignamos numero de palabras
    $resultado["numpalabras"] = $num_palabras;



    echo "La palabra es" . $palabra_buscar . "<br> El numero de lineas es " . $resultado["numlineas"] . " <br> El numero de palabras en el texto es " . $resultado["numpalabras"] . "<br> El numero de veces que aparece la palabra introducida es " . $num_palabrabuscar . "y el numero de palindromos es " . $num_palindromo;


    ?>
</body>
</html>