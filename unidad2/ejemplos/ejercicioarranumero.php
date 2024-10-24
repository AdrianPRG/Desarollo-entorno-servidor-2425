<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $arraynumeros = [120,30,311,90,190,400,5,1,22,12,790,0];
    $maximo= PHP_INT_MIN;
    $minimo= PHP_INT_MAX;
    $media = 0;

    for($x=0;$x<count($arraynumeros);$x++){
        if($arraynumeros[$x]>=$maximo){
            $maximo=$arraynumeros[$x];
        }
        if($arraynumeros[$x]<=$minimo){
            $minimo=$arraynumeros[$x];
        }
        $media+=$arraynumeros[$x];
    }

    echo "El maximo es " . $maximo . "<br/>";
    echo "El maximo es " . $minimo . "<br/>";
    echo "El maximo es " . $media/count($arraynumeros) . "<br/>";

    $listaletras = ["a","b","z"];

    if(isset($listaletras[9])){
        echo "Existe";
    }
    else{
        echo "no existe";
    }

    print "<br/>";
    print_r($listaletras);
    print "<br/>";
    unset($listaletras[1]);
    array_push($listaletras,"aa");
    $listaletras[1]="ba";
    print_r($listaletras);


    ?>
</body>
</html>