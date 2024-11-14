<?php

function sumaenteros($array){
    $listaNumeros = explode(",",$array);
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