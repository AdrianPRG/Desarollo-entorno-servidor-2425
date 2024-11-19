<?php

function sumaenteros($cadenaInts){
    //Se obtiene la cadena del html separada por ,
    $listaNumeros = explode(",",$cadenaInts);
    //si no hay ningun elemento, se devuelve 0, no hay suma
    if(count($listaNumeros)<1){
        return 0;
    }
    else{
        //Se establece suma a 0 en caso de que ningun elemento sea numerico
        $suma=0;
        foreach ($listaNumeros as $numero) {
            //Solo se sumará si el numero es valido
            if(is_numeric((int)$numero)){
                $suma+=(int)$numero;
            }
        }
        //Se devuelve la suma
        return $suma;
    }
}


function sumaDeFloats($cadenaFloats){
    //Se obtiene la cadena del html dividida por ,
    $listaNumeros = explode(",", $cadenaFloats);
    //Si no hay elementos,se devuelve 0
        if(count($listaNumeros)<1){
            return .0;
        }
        else{
            $suma=.0;
            foreach ($listaNumeros as $numero) {
                //Se comprueba si el numero es float
                if(is_nan((float)$numero)==false){
                    $suma+=(float)$numero;
                }
            }
            //Se devuelve la suma
            return $suma;
        }
    }

function SumaDeNumeros($cadena){
    //Como se pueden devolver varios resultados, esta vez se devolverá un array
    $suma = 0;
    //SUMA DE NUMEROS
    //Solo se tienen en cuenta las dos primeras lineas que son las que contienen numeros
    for($x=0;$x<2;$x++){
        $cadenaActual = explode(",",$cadena[$x]);
        foreach($cadenaActual as $numero){
            //Se recorre cada numero y se comprueba si el elemento es numerico o entero
            if(is_nan((float)$numero)==false || is_numeric((int)$numero)){
                //Se suma el numero
                $suma+=(int)$numero;
            }
        }
    }
        return $suma;
}

    
    
function calcularMedia($listaCadenas) {
    $contnumeros = 0;
    $sumaActual = 0;
    foreach ($listaCadenas as $linea) {
        //Cada linea se divide en comas
        $numeros = explode(",", $linea);
        foreach ($numeros as $numero) {
            $numero = trim($numero);
            //Si es numerico, se suma el contador y se suma el numero actual
            if (is_numeric($numero)) {
               $contnumeros++;
               $sumaActual+=$numero;
            }
        }
    }
    //Si hay un numero almenos , se devuelve la media
    if ($contnumeros > 0) {
        return $sumaActual / $contnumeros;
    } else {
        //si no se devuelve nulo
        return null; 
    }
}

//Funcion para calcular la palabra mas larga
function palabraMasLarga($cadenas){
    $listaPalabras = explode(",",$cadenas);
    //Si hay menos de un elemento se devolverá nulo
    if(count($listaPalabras)<1){
        return "Nulo";
    }
    else{
        $palabraMasLarga = "";
        foreach ($listaPalabras as $cadena) {
            //Si la longitud de la palabra es mayor a la longitud de la palabra mas larga, se establece como palabra mas larga el elemento actual
            if(strlen($cadena)>strlen($palabraMasLarga)){
                $palabraMasLarga=$cadena;
            }
        }
        //Se devuelve la palabra mas larga
        return $palabraMasLarga;
    }
}



//Funcion para calcular el factorial del numero
function factorialNumero($num){
    $factorial=1;
    for($x=1;$x<=$num;$x++){
        //Se almacena el valor y se multiplica por el numero de la siguiente iteraccion
        $factorial*=$x;
    }
    //Se devuelve el factorial
    return $factorial;
}

?>