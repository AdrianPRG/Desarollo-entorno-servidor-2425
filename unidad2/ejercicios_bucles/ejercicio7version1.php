<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <body style="width: 100%; flex-direction: column; align-items: center; display: flex; background-color: aliceblue">
        <div style="width: 80%; max-width: 600px; align-items: center; background-color:ivory; min-height: 10vh; display: flex; flex-direction: column; padding: 20px; box-sizing: border-box;border-radius:20px">
            <form method="post" style="display: flex; flex-direction: column;align-items: center;">
                <h4>Ejercicio 7 - Version1 - ALG</h4>
                <label for="nombre" class="form-label mt-3 mb-3">Palabra</label>
                <input required style="width: 100%;" type="text" class="form-control" name="palabra" id="palabra" aria-describedby="helpId" placeholder="Buenas,mañana,final.."/>
                <input type="submit" class="mt-3 btn btn-primary">
            </form>
            <form>
                <input class="mt-2 btn btn-warning" type="submit" value="reset">
            </form>
            <?php
                $numero=0;
                if(isset($_POST["palabra"])){
                    //Se pasa a minuscula la palabra, se quitan espacios de derecha e izquierda
                    $palabra = strtolower(trim($_POST["palabra"]));
                    //Se cuenta la cantidad de palabras
                    $cantidadPalabras = count(explode(" ",$palabra));

                    //Si hay solo una palabra que es lo esperado, se ejecuta el codigo
                    if($cantidadPalabras==1){
                        //Se comprueba si no es una cadena vacia, ya que el usuario puede introducir un espacio en blanco, y eso pasaria por valido con la funcion explode
                        if(empty($palabra==false)){
                            //Se recorre cada letra
                            for($x=0;$x<strlen($palabra);$x++){
                                //Se comprueba que solo se calculen las letras, no los signos especiales
                                if($palabra[$x]>="a" && $palabra[$x]<="z"){
                                    //Se usa la funcion ord, que convierte la palabra a su numero es ASCII
                                    //Como queremos que empieze en 1, restamos a su valor en ASCII menos a, que es el primero. Es como si hiciesemos un calculo matematico
                                    //Se resta de a ya que es el primer numero, si restasemos el mismos ORD siempre seria 1
                                    $numero+= ord($palabra[$x]) - ord("a") + 1;;
                                }
                            }
                            //Se imprime la palabra y su valor numerico
                            echo "El valor de " . $palabra  . " en numero es "  . $numero;
                        }
                        else echo "Se ha introducido una cadena vacia";
                    }
                    else echo "No se permiten mas de dos palabras";
                }
            ?>
        </div>
    </body>
</html>