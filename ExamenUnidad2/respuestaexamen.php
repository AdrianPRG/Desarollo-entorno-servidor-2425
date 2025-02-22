<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

<div
    class="table-responsive"
>
    <table
        class="table table-striped table-hover table-borderless table-primary align-middle"
    >
        <thead class="table-light">
            <caption>
                Tabla de analisis de Floristeria Adrian
            </caption>
            <tr>
                <th>Provincia</th>
                <th>Pais</th>
                <th> Mes actual </th>

            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr class="table-primary">
                <td scope="row">Cadiz</td>
                <td>España</td>
                <td>Noviembre</td>
            </tr>
        </tbody>
        <tfoot>
            
        </tfoot>
    </table>
</div>


<?php

if(isset($_POST["pais"]) || isset($_POST["CA"]) || isset($_POST["tiendas"]) || isset($_POST["plantas"])){


    //EL EJERCICIO NO ELEGIDO ES EL 5

    //EJERCICIOS NO REALIZADOS: 2,5

    //EJERCICIOS SI REALIZADOS: 1,3,4,6

    //Array asociativo que contiene los resultados
    $comprobaciones  = [];
    
    //Se divide por lineas las tiendas y plantas
    $tiendas = explode("\n",$_POST["tiendas"]);
    $plantas = explode("\n",$_POST["plantas"]);

    //Se guardan en el array asociativo los valores de las comprobaciones

    $comprobaciones["Comprobacion1"] = Comprobacion1($tiendas,$plantas) == true ? "true" : "false" ;
    $comprobaciones["Comprobacion3"] = Comprobacion3($tiendas,$plantas) == true ? "true" : "false" ;

    //Resultados de las comprobaciones en array asociativo de la comprobacion del punto 4.

    foreach($comprobaciones as $clave => $valor){
        echo("<br> <b> {$clave} </b> --> " . $valor);
    }

    echo "<br> <b> Comprobacion4 </b> -->";
    foreach (Comprobacion4($tiendas,$plantas) as $clave => $valor) {
        echo "<br> &nbsp&nbsp {$clave}  , Total de plantas ->  {$valor}"; 
    }

    echo "<br> <b> Comprobacion6 </b>-->";
    foreach (Comprobacion6($tiendas,$plantas) as $clave => $valor) {
        echo "<br> &nbsp&nbsp  {$clave}  , nombre de tienda ->  {$valor}"; 
    }


}


function Comprobacion1($tiendas,$plantas){
    //Por defecto se inicializa a true
    $stockCorrecto = true;
    $numplantas=0;
    foreach ($tiendas as $tienda) {
        //Se obtienen los valores de la tienda separados por guion
        $valoresTienda = explode("-",$tienda);
        foreach($plantas as $planta){
            //Valores de la planta por guión
            $valoresPlanta = explode("-",$planta);
            //Si el nombre de la tienda actual es igual al nombre de la linea de la planta actual, se suma uno al contador de plantas
            if($valoresPlanta[0]==$valoresTienda[0]){
                $numplantas++;
            }
        }
        //Se comprueba que el numero de plantas de la tienda coincida con el numero de plantas encontradas
        if($valoresTienda[5]!=$numplantas){
            //Si no es asi, stockcorrecto es falso, y se sale de el bucle, ya que no se cumple la condicion
            $stockCorrecto = false;
            break;
        }
        //Si es correcto, se continua, se restablece el valor de numplantas para la siguiente tienda
        else $numplantas=0;
    }

    return $stockCorrecto;
}

function Comprobacion3($tiendas,$plantas){
    //Se pone por defecto a true
    $unaplanta=true;
    $numplantasTienda = 0;
    foreach($tiendas as $tienda){
        $valoresTienda = explode("-",$tienda);
        foreach($plantas as $planta){
            $valoresPlanta = explode("-",$planta);
            //Se tendra en cuenta si el nombre de la tienda es igual al de la linea de plantas
            if($valoresPlanta[0]==$valoresTienda[0]){
                //Se suma 1 
                $numplantasTienda++;
            }
        }
        //Se comprueba si el numero de plantas de la tienda actual es mayor a uno
        if($numplantasTienda>=1){
            //si es asi, se restablece para la siguiente tienda
            $numplantasTienda=0;
        }
        else{
            //Si no es asi, significa que una tienda no tiene almenos una planta, por lo tanto la condicion es false, se sale del programa
           $unaplanta = false;
           break;
        }
    }
    return $unaplanta;
}

function Comprobacion4($tiendas,$plantas){
    //Array asociativo que contiene el clave valor de las tiendas y su numero de plantas
    $arrayTiendas = [];
    $plantasTotales = 0;
    
    foreach($tiendas as $tienda){
        $valoresTienda = explode("-",$tienda);
        foreach($plantas as $planta){
            $valoresPlanta = explode("-",$planta);
            if($valoresTienda[0]==$valoresPlanta[0]){
                //Se guarda de la tienda actual el numero de plantas de la linea de planta actual
                $plantasTotales+=(int)$valoresPlanta[2];
            }
        }
        //Se guarda en el array asociativo clave nombre de tienda valor el numero de plantas totales que tiene
        $arrayTiendas[$valoresTienda[0]]=$plantasTotales;
        //Se restablece para la siguiente tienda
        $plantasTotales=0;
    }
    //En vez de hacerlo afuera, se suma directamente y se guarda como un campo mas.
    $arrayTiendas["sumaTotal"] = array_sum($arrayTiendas);

    //se devuelve el array
    return $arrayTiendas;
}

function Comprobacion6($tiendas,$plantas){
    //Se guardaran aqui los resultados
    $resultados = [];
    $cantidadActual = 0;
    $maximo = PHP_INT_MIN;
    $minimo = PHP_INT_MAX;

    foreach($tiendas as $tienda){
        $valoresTienda = explode("-",$tienda);
        foreach($plantas as $planta){
            $valoresPlanta = explode("-",$planta);
            if($valoresTienda[0]==$valoresPlanta[0]){
                //Se guarda de la tienda actual el valor de cada planta que sea de la tienda (como antes, que coincida con el nombre)
                $cantidadActual+=$valoresPlanta[2];
            }
        }
        //Si la cantidad actual es mayor al maximo
        if($cantidadActual>$maximo){
            //Se guarda en el array asociativo el valor de la tienda actual cuyo numero de plantas son mayores que el maximo
            $resultados["Mayor recaudado"] = $valoresTienda[0];
            //El maximo pasa a ser la cantidad de esa tienda
            $maximo = $cantidadActual;
        }
        if($cantidadActual<$minimo){
            //Se guarda en el array asociativo el valor de la tienda actual cuyo numero de plantas son menores que el minimo
            $resultados["Menor Recaudado"] = $valoresTienda[0];
            //El minimo pasa a ser la cantidad de esa tienda
            $minimo = $cantidadActual;
        }
        //Se restablece la cantidad de plantas para la siguiente tienda
        $cantidadActual=0;
    }

    return $resultados;
}


?>
    
</body>
</html>