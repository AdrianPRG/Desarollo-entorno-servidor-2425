<html>
    <head>

    </head>
    <body>
        <?php

        //Variables no necesitan ser declaradas (su tipo)
        $num1 = 293;
        $num2 ="23";

        $num4 = 23;

        //Comparador de si son iguales (mismo numero)

        if($num2==$num4){
            print"<br/> son iguales";
        }
        else{
            print"<br/> no son igules";
        }


        //Comparador de si son iguales (mismo numero) y mismo tipo

        if($num2===$num4){
            print"<br/> son iguales y del mismo tipo";
        }
        else{
            print"<br/> no son igules ni del mismo tipo";
        }



        $arraynumero = array(8,39,293,929,10,0,55);

        //Convertir de string a entero

        $num3 = (int)$num2;

        //suma

        $num3 =$num1 + $num2;
        
        echo "<br/>";

        //comprobacion si es entero

        if (is_int($num2)){
            print "es entero";
        }
        else {
            print "no es entero";
        }

        echo "<br/>";

        print PHP_FLOAT_MAX;

        echo "<br/>";

        print $num3;

        $num1 ="buenas";


    $texto = "estamos en la clase daw de 2 daw, aunque sea de perogrullo";

        echo $num1;

        if (2>=2){
            //nombre esta declarado dentro del if, se puede usar desde mas sitios

            $nombre = "pepe";
            print "<br/> Entra";
        }

        print "<br/> nombre es $nombre";

        //Sin embargo, dentro de una funcion la variable declarada no es accesible,
        //por que el if esta dentro del codigo, pero la funcion puede ser en contexos distintos.

        function myText(){
            $x = 4;
            echo "<br/> El numero es $x";
        }

        myText();

        //Error pq no se encuentra la variable
        print "<br/> Sacar num $x <br/>";


        //var dump dice el tipo de dato de la o las variables
        var_dump($nombre);
        echo "<br/>";

        //Array
        $empleado = array("pedro",34,2510,203);

        //Nos muestra la lista y sus tipos de datos
         var_dump($empleado);


         //strings, con comillas simles muestra el mensaje literal incluido nombre de variable, con comilla dobles no

        echo "<br/>";
        echo "$empleado[0]";

        echo "<br/>";
        echo '$empleado[0]';

        //strlen nos dice cuantos caracteres tiene un string

        echo "<br/>";
        print ("longitud de nombre ". strlen($empleado[0]));

        //count nos dice cuantos elementos hay en array
        echo "<br/>";
        print("longitud de array ".count($empleado));


        //strtok es como un split de kotlin

        //strtoupper para ponerlo mayusculas    

        //strcasecmp para comparar mayusculas y minusculas

        //strworldcount para contar cantidad de palabras

        //strpos posicion donde empieza segundo argumento es encontrada en el primero 

        echo "<br/>";
        echo strpos("buenas tardes mis camaradas españoles","camaradas");

        //strreplace 3 argumentos (palabra que se quiere cambiar, palabra sustituta, cadena en la que se buscará)

        echo "<br/>";
        print($texto);
        echo "<br/>";
        echo str_replace("daw","smr",$texto);

        //strrev para que le de la vuelta a la cadena

        //trim para quitar espacios de string

        echo "<br/>";

        //explode corta una cadena y devuelve un array de secciones de dicha cadena
        //primer argumento hay que indicarle el serparados
        var_dump(explode(" ",$texto));

        echo "<br/>";

        //minimo
        print min($arraynumero)."<br/>";

        //round
        echo round(4.50);

        //random

        echo "<BR/> NUMERO ALETORIO: ". random_int(-100,2238);

        //concatenar cadeas es con .


        //CONStantes,SON GLOBALES, se pueden usar desde cualquier otr clase , fichero, funciones, etc.

        define("VIDAMAXIMA",100);

        print "<br/> la vida maxima es: ". VIDAMAXIMA;

        //const no puede estar dentro de if o funciones, si no en el codigo


        //?: para que si es verdadero valor 1 es valor 2 si es falso valor 3
        // x =  exp1 ? exp2:exp3

        ?>
    </body>
</html>