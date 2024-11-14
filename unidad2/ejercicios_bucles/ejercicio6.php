<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <style>
        .container {
            background-color: aliceblue;
            max-width: 100%; /* Limita el ancho del contenedor */
            padding: 20px;
        }
    </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="" class="form-label">Numeros</label>
                <input required type="text" class="form-control" name="numeros" id="numeros" aria-describedby="helpId" placeholder="29 98 17 95" />
                <small id="helpId" class="form-text text-muted">Introduce numeros</small>
            </div>
            <div class="form-check ">
                    <input class="form-check-input" type="checkbox" value="true" name="ordenado" id="ordenado" />
                    <label class="form-check-label" for=""> Ordenado </label>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
        <?php
        
            if(isset($_POST["numeros"])){
                //Se divide la cadena y cada numero segun los espaciados
                $textoNumeros = explode(" ",$_POST["numeros"]);
                $ordenado = isset($_POST["ordenado"]) ? true : false;
                //Array asociativo donde se almacenarán los resultados
                $arrayResultados=[];

                //Si el texto introducido no es vacio
                if (empty($textoNumeros)==false){
                    //Se definen las variables que almacenarán temporalmente los valores de numero primo, media y minimo
                    //Se define este contador de numero, ya que luego a la hora de realizar la media, queremos que solo se haga entre los numeros validos, mas adelante se explicará
                    $contnumeros=0;
                    $nprimo=0;
                    $media=0;
                    $minimo = PHP_INT_MAX;
                    //Bucle para recorrer cada numero en la cadena obtenida, segun espacios
                    foreach($textoNumeros as $numero){
                        //Se comprueba que el valor sea numerico
                        if(is_numeric($numero)){
                            //Se llama a la funcion esPrimo(), si es verdaderá la condicion, se incrementa
                            if(EsPrimo($numero)){
                                $nprimo++;
                            }
                            //A continuacion, se comprueba si el numero actual es menor que el minimo establecido
                            if($numero<$minimo){
                                $minimo=$numero ;
                            }
                            //A la media se le suma el numero
                            $media+=$numero;
                            $contnumeros++; 
                        }
                    }
                    //Una vez terminado el bucle, se almacenan los resultados en el array asociativo
                    $arrayResultados["minimo"]=$minimo;
                    $arrayResultados["Primos"]=$nprimo;
                    //En vez de realizar la media diviendo entre la cantidad de elementos del array $textoNumeros, se hace de esta variable,
                    //pues puede que algun elemento del array $textonumeros tuviese algun caracter no valido, por ello se tiene en cuenta solo la variable contnumeros
                    //la cual solo se incrementa si el elemento del array es valido.
                    //Ademas, como puede que no se introduzca ningun caracter numerico, se comprobara si almenos hay un numero, si no, la media será 0
                    $arrayResultados["media"]= ($contnumeros>=1) ? $media/$contnumeros : 0;

                    //Si el usuario ha marcado el checkbox como ordenado, se imprimira el array de forma distinta
                   if($ordenado==true){
                    echo "La cantidad de numeros primos es " . $arrayResultados["Primos"] . ", la media es " . $arrayResultados["media"] . " y el numero minimo es " . $arrayResultados["minimo"];
                   }
                   else  echo "El numero minimo es " . $arrayResultados["minimo"] . ", la media es " . $arrayResultados["media"] . " y la cantidad de numeros primos es " . $arrayResultados["Primos"];
                
            }
        }

            function EsPrimo($num){
                //La condicion inicial es que primo es igual a true
                $primo=true;
                //El primer paso es comprobar que el numero sea divisible entre 0 y el propio numero
                if($num%1==0 && $num%$num==0 && $num>1){
                    //Se recorren todos los numeros posibles hasta el propio numero
                    for($x=1;$x<$num;$x++){
                        //Se tomaran en cuenta todos los numeros menos el 1 y el propio numero, para ello
                        //se utiliza la sentencia continue, que pasa a la siguiente iteracion
                        if($x==1 || $x==$num){
                            continue;
                        }
                        else{
                            //Si alguno de ellos es divisible y no es 1 o el numero, se descarta que sea primo
                            if($num%$x==0){
                                $primo=false;
                                break;
                            }
                        }
                        //Si en ningun momento el valor de primo ha cambiado a false, quiere decir que el numero es primo
                    }
                    return $primo;
                }
                //Directamente si en la primera condicion se sabe que no es primo, se devuelve false
                else return false;
            }

        ?>
    </div>
</body>
</html>