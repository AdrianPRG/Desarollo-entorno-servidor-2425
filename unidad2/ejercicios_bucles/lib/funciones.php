<?php

function sumaenteros($cadenaInts){
    $listaNumeros = explode(",",$cadenaInts);
    if(count($listaNumeros)<1){
        return 0;
    }
    else{
        $suma=0;
        foreach ($listaNumeros as $numero) {
            if(is_numeric((int)$numero)){
                $suma+=(int)$numero;
            }
        }
        return $suma;
    }
}


function sumaDeFloats($cadenaFloats){
    $listaNumeros = explode(",", $cadenaFloats);
        if(count($listaNumeros)<1){
            return .0;
        }
        else{
            $suma=.0;
            foreach ($listaNumeros as $numero) {
                if(is_nan((float)$numero)==false){
                    $suma+=(float)$numero;
                }
            }
            return $suma;
        }
    }

function SumaDeNumeros($cadenaInts,$cadenaFloats,$media,$factorial){
    //Como se pueden devolver varios resultados, esta vez se devolverá un array
    $resultados = [];

    $resultados[0] = (sumaenteros($cadenaInts) + sumaDeFloats($cadenaFloats));
    $numeros =  (int) array_filter(explode(",",$cadenaInts),'is_numeric') + array_filter(explode(",",$cadenaInts),'is_numeric');

    $resultados[1] = ($media==true) ? $resultados[0]/$numeros : "Sin media";

    return $resultados;
}

function palabraMasLarga($cadenas){
    $listaPalabras = explode(",",$cadenas);
    if(count($listaPalabras)<1){
        return "Nulo";
    }
    else{
        $palabraMasLarga = "";
        foreach ($listaPalabras as $cadena) {
            if(strlen($cadena)>strlen($palabraMasLarga)){
                $palabraMasLarga=$cadena;
            }
        }
        return $palabraMasLarga;
    }
}

?>