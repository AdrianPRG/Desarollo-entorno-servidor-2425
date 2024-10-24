<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <form method="post">
        <div class="ms-4">
            <div class="mt-3 col-5  ">
                <label for="" class="form-label">Introduce primer numero</label>
                <input
                    type="number"
                    class="form-control"
                    name="num1"
                    id="num1"
                    aria-describedby="helpId"
                    placeholder=""
                />
                <small id="helpId" class="form-text text-muted">Numero 1</small>
            </div>
            <div class="mt-4 col-5">
                <label for="" class="form-label">Introduce segundo numero</label>
                <input
                    type="number"
                    class="form-control"
                    name="num2"
                    id="num2"
                    aria-describedby="helpId"
                    placeholder=""
                />
                <small id="helpId" class="form-text text-muted">Numero 2</small>
            </div>
        </div>
    </form>
    

    <?php

    /**
     * powertolais
     * La funcion recibira un numero y una potencia y devuelve el numero elevado a aesta potencia
     */



     //Para pasar por valor una variable a una funcion hay que poner &, esto hace que yo pueda modificar el vlor de esa variable y se queda modificdo
     //despues de la ejecucion de la funcion

    function powertotalis(&$numero,$potencia){
        $numero = $numero**$potencia;
        echo "LA SUMA ES " . $numero . "<br>";
    }

    //Esto se denomina paso por referencia

    $valor=3;
    powertotalis($valor,3);
    echo $valor ." valor<br>";
    powertotalis($valor,3);
    echo $valor ." valor<br>";


    ?>
</body>
</html>l