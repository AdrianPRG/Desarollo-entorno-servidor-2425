<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 Adrian Lopez</title>
</head>
<body>
    <?php
    //Creamos una lista que contendra los palos
    $listaNombresCartas=array("De corazones","De picas","De treboles","De diamantes");
    //Esta lista contendrá todos los palos y numeros (Cartas creadas)
    $listacartas = array();
    //Esta lista almacenará la mano del jugador (5 cartas)
    $manojugador = array();
    //Hacemos un bucle en el que primero,recorreremos cada palo (corazones,picas,etc)
    for ($i=0;$i<count($listaNombresCartas);$i++){
        /* Posteriormente, como sabemos que cada palo puede tener 13 valores distintos,
        crearemos un bucle que creará cada numero de carta, y se añadirá la carta con su numero y palo
        a la lista de cartas $listacartas*/
        for ($x=1;$x<=13;$x++){
            /*Se sabe que los numeros 1,11,12,13 tienen un valor distinto, asi que cuando salga
                uno de ellos, se aplicará el nombre correspondiente: AS de corazones, Jotas de picas, etc
                Si no es ningun naipe con nombre, se asignará el de la iteraccion actual*/
            switch($x){
                case 1:
                    //Se añade la carta a la lista de cartas
                    array_push( $listacartas,"AS de $listaNombresCartas[$i]"); 
                    break;  
                case 11:
                    array_push( $listacartas,"Jota de $listaNombresCartas[$i]"); 
                    break;
                case 12:
                    array_push( $listacartas,"Reina de $listaNombresCartas[$i]"); 
                    break;
                case 13:
                    array_push( $listacartas,"Rey de $listaNombresCartas[$i]");
                    break;
                default:
                   array_push( $listacartas,"$x de $listaNombresCartas[$i]");
                    break;
            }
        }
    }

    //Daremos al jugador una mano de 5 cartas, que se elegiran aleatoriamente de la lista de cartas
    for ($numerocarta=1;$numerocarta<=5;$numerocarta++){
                $cartarandom = $listacartas[random_int(0,51)];
                //Mientras que se genere una repetida, no se añadira a la lista, se sacará una nueva
                while (in_array($cartarandom,$manojugador)==true){
                    $cartarandom = $listacartas[random_int(0,51)];
                }
                //Se añade la carta a la mano del jugador
                array_push($manojugador,$cartarandom);
        }

    echo "Esta es la mano del jugador<br/>";
    //Se imprime la mano del jugador
    for ($carta=0;$carta<count($manojugador);$carta++){
        echo "<br/>".$manojugador[$carta];
    }

    ?>
</body>
</html>