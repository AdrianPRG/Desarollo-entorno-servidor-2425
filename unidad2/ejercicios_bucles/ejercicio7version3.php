<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 V3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <body style="width: 100%; flex-direction: column; align-items: center; display: flex; background-color: aliceblue">
        <div style="width: 80%; max-width: 600px; align-items: center; background-color:ivory; min-height: 10vh; display: flex; flex-direction: column; padding: 20px; box-sizing: border-box;border-radius:20px">
            <form method="post" style="display: flex; flex-direction: column;align-items: center;">
                <h4>Ejercicio 7 - Version3 - ALG</h4>
                <label for="palabra" class="form-label mt-3 mb-3">Palabra</label>
                <input required style="width: 100%;" type="text" class="form-control" name="palabra" id="palabra" aria-describedby="helpId" placeholder="Buenas,mañana,final.."/>
                <label for="palabra2" class="form-label mt-3 mb-3">Palabra 2</label>
                <input required style="width: 100%;" type="text" class="form-control" name="palabra2" id="palabra2" aria-describedby="helpId" placeholder="Zapato,titan,tesoro.."/>
                <input type="submit" class="mt-3 btn btn-primary">
            </form>
            <form>
                <input class="mt-2 btn btn-warning" type="submit" value="reset">
            </form>
            <?php


                if(isset($_POST["palabra"]) || isset($_POST["palabra2"])){
                    $palabra1=$_POST["palabra"];
                    $palabra2=$_POST["palabra2"];
                    //Se comprueba de que ninguna cadena introducia ha dado fallo, ya sea por que sea mas de una palabra o 
                    //que tenga espacios en blanco
                    if(comprobarValor($palabra1)!=false && comprobarValor($palabra2)!=false){
                        //Se compara que palabra tiene mayor valor
                        if(comprobarValor($palabra1)>comprobarValor($palabra2)){
                            echo "La palabra 1 (". $palabra1 . ")  es mas grande que la palabra 2 (" . $palabra2;
                        }
                        else if(comprobarValor($palabra1)<comprobarValor($palabra2)){
                            echo "La palabra 2 (". $palabra2 . ")  es mas grande que la palabra 1 (" . $palabra1;
                        }
                        else echo "Las cadenas son iguales en valor";
                    }
                    else echo "Una de las cadenas es erronea";
                }

                function comprobarValor($palabra){
                    $letras = ["a" => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8, 'i' => 9, 'j' => 10, 'k' => 11, 'l' => 12, 'm' => 13, 'n' => 14, 'o' => 15, 'p' => 16, 'q' => 17, 'r' => 18, 's' => 19, 't' => 20, 'u' => 21, 'v' => 22, 'w' => 23, 'x' => 24, 'y' => 25, 'z' => 26];
                    $numero=0;
                    $palabra = strtolower(trim($palabra));
                    //Se buscan la cantidad de palabras
                    $cantidadPalabras = count(explode(" ",$palabra));
                    //Si no es un espacio en blanco:
                    if(empty($palabra)==false){
                        //Se comprueba que solo se haya introducido una palabra
                        if($cantidadPalabras==1){
                            //Se recorre letra a letra de la palabra
                            for($x=0;$x<strlen($palabra);$x++){
                                //Si existe la letra, se suma
                                //Se hace esta comprobacion ya que puede que se introduzca algun caracter especial (,.:");
                                //De esta forma, aseguramos que no haya errores
                                if(array_key_exists($palabra[$x],$letras)){
                                    //Se suma al numero el equivalente en el array asociativo del valor de la palabra
                                    $numero+=$letras[$palabra[$x]];
                                }
                            }
                            //Se devuelve el numero
                            return $numero;
                        }
                        //Se devuelve falso
                        else return false;
                    }
                    //Para cuando se introduzca una cadena vacia o un espacio
                    else return false;
                }
                
            ?>
        </div>
    </body>
</html>