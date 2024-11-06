<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body style="width: 100%;display: flex; flex-direction:column; align-items:center">
    <div style="padding:10px;background-color:aliceblue;width:50%;align-items:center;display:flex;flex-direction:column;border-radius:10vh 10vh 0vh 0vh;border:solid 0.1vh">
        <img src="../ejercicios/imagenes/uno.png" width="17%">  
        <h4 style="font-size: 3lvh;font-family:'Times New Roman', Times, serif">Juego del Uno - ALG</h4>
    </div>
    <?php
        ?>

    <?php

        if (isset($_POST["Empieza"])) {
            
        } 
        else {
            $carta_aleatoria="card1";
            $mano_Jugador=array();
            $lista_cartas = array();
            $Colores_cartas = array("Rojo","Azul");
    
            for($i=0;$i<count($Colores_cartas);$i++){
                for($x=1;$x<6;$x++){
                    array_push($lista_cartas,$x . "_" . $Colores_cartas[$i]);
                }
            }
            for ($i=0; $i < 4; $i++) { 
                do{
                    $carta_mano=$lista_cartas[array_rand($lista_cartas)];
                }
                while(in_array($carta_mano,$mano_Jugador)==true);
                array_push($mano_Jugador,$carta_mano);
            }
            $cadena = "";
            $empieza ="";
        }
    ?>
    <div style="flex-direction: column; display: flex; background-color: ghostwhite; align-items: center; width: 80vw; height:80vh; border-radius: 10vh; padding-top: 2vh; border: solid 0.01vh; box-sizing: border-box;">
        <div style="width: 100%; border-radius: 10vh; align-items: center; display: flex; flex-direction: column; padding-top: 2vh;">
            <img src="../ejercicios/imagenes/<?php echo $carta_aleatoria . ".png" ?>" style="width: 15%; max-width: 100%; height: auto;">
        </div>
        
        <div class="mt-4" style="flex-grow: 1;background-color:azure;width:100%;overflow:hidden;border-radius:0vh 0vh 10vh 10vh;align-items:center;justify-content:center;display:flex">
            <form method="post">
                <?php 
                echo "<button class='me-2' style='background: transparent; border: none; padding: 5px; transform: scale(1);'><img src='../ejercicios/imagenes/" . $mano_Jugador[$i] . ".png' style='width: 80px; height: 80px; object-fit: contain;'></button>";

                ?>
                <input type="hidden" name="Empieza">
                <input type="submit" class="ms-3 btn btn-secondary">
            </form>
        </div>
    </div> 

</body>
</html>