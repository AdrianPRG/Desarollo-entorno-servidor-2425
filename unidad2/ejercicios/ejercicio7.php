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

        if (isset($_POST["carta"]) && isset($_POST["manojugador"]) && $_POST["nuevamano"]) {
            $carta_aleatoria=$_POST["carta"];
            $mano_Jugador=$_POST["manojugador"];
            $nueva_mano=$_POST["nuevamano"];
            $lista_cartas=$_POST["listacartas"];

            if($nueva_mano=="nuevamano"){
                $mano_Jugador=[];
                for ($i=0; $i<4; $i++) { 
                    do{
                        $carta_mano=$lista_cartas[array_rand($lista_cartas)];
                    }
                    while(in_array($carta_mano,$mano_Jugador)==true);
                    array_push($mano_Jugador,$carta_mano);
                }
            }
            else{
                foreach ($iterable as $item) {
                    
                }
            }
        } 
        else {
            $carta_aleatoria="CartaVolteada";
            $mano_Jugador=array();
            $lista_cartas = array();
            $Colores_cartas = array("Rojo","Azul");
    
            for($i=0;$i<count($Colores_cartas);$i++){
                for($x=1;$x<6;$x++){
                    array_push($lista_cartas,$x . "_" . $Colores_cartas[$i]);
                }
            }
            for ($i=0; $i<4; $i++) { 
                do{
                    $carta_mano=$lista_cartas[array_rand($lista_cartas)];
                }
                while(in_array($carta_mano,$mano_Jugador)==true);
                array_push($mano_Jugador,$carta_mano);
            }
        }
    ?>
    <div style="flex-direction: column; display: flex; background-color: ghostwhite; align-items: center; width: 80vw; height:80vh; border-radius: 10vh; padding-top: 2vh; border: solid 0.01vh; box-sizing: border-box;">
       
            <form style="width: 100%;" method="post">
            <div style="flex-direction: column;width:100%;display:flex;align-items:center">
                <input type="hidden" name="carta" value="<?php echo $carta_aleatoria ?>">
                <img src="../ejercicios/imagenes/<?php echo $carta_aleatoria . ".png" ?>" style="width: 15%; max-width: 100%; height: auto;">
            </div>
                <div class="mt-4" style="background-color:azure;width:100%;height:20vh;overflow:hidden;border-radius:0vh 0vh 10vh 10vh;align-items:center;justify-content:center;display:flex">
                    <?php
                    for($i=0;$i<4;$i++){
                        echo '<input type="hidden" name="manojugador[]" value="' . $mano_Jugador[$i] . '">';
                        echo "<button type='button' class='me-2' style='background: transparent; border: none; padding: 5px; transform: scale(1);'> <img src='../ejercicios/imagenes/" . $mano_Jugador[$i] . ".png' style='width: 80px; height: 80px; object-fit: contain;'> </button>";
                    }
                    for($x=0;$x<count($lista_cartas);$x++){
                        echo '<input type="hidden" name="listacartas[]" value="' . $lista_cartas[$x] . '">';
                    }
                    ?>
                    <input type="submit" value="nuevamano" name="nuevamano" class="ms-3 btn btn-secondary">
                </div>
            </form>
    </div> 

</body>
</html>